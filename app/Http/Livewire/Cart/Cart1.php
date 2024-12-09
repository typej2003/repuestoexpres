<?php

namespace App\Http\Livewire\Cart;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Pedido;
use App\Models\PedidoDetalles;
use App\Http\Controllers\CartController;

use Cart;

class Cart1 extends AdminComponent
{
    public $comercio_id; 

    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;
    }

    //Autentica al usuario
    public function autenticar(Request $request)
    {
        //Validación de datos (incluyendo la de activo)
        if($request->post('identificationNumber')){
            $credentials = $request->validate([
                'identificationNumber' => ['required'],
                'password' => ['required']
            ]);    
        }else{
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required']
            ], $this->messages);    
        }

        //Si es correcto, inicio sesión y login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // return redirect()->route('welcome');

            // return redirect()->intended('admin/dashboard')->with('success','Bienvenido al panel de Administración');
        }

        //Si no, muestro mensaje de error
        return back()->withErrors([
            'email' => 'El email no está registrado.',
        ]);
    }

    //Registra al usuario
    public function registrarse(Request $request)
    {
        //Validación y recopilación de datos
        Validator::make($input, [
            'identificationNac' => ['required', 'string', 'max:1'],
            'identificationNumber' => ['required', 'string', 'max:12'],
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();
        
        $user = User::create([
            'identificationNac' => $input['identificationNac'],
            'identificationNumber' => $input['identificationNumber'],
            'name' => $input['name'],
            'email' => $input['email'],
            'role' => $input['role'],
            'password' => Hash::make($input['password']),
        ]);

        DatosBasicos::create([
            'user_id' => $user->id,
            'cellphonecode' => $input['cellphonecode'],
            'cellphone' => $input['cellphone'],
        ]);
        
        //Login de usuario
        Auth::login($user);

        return back();

        //Redirección
        // return redirect("admin")->with('success','Te has registrado correctamente. Bienvenido');
    }

    public function finalizarCompra()
    {
        
        $cart = new CartController;
        
        
        $pedidoref = auth()->user()->identificationNumber . '-' . str_replace("-", "", date("Y-m-d")) . str_replace(":", "", date("H:i:s"));

        $pedido = Pedido::create([
            'pedido' => $pedidoref,
            'comercio_id' => $this->comercio_id,
            'user_id' => auth()->user()->id,
            'description' => '',
            'coste' => $cart->total(),
            'currency' => 1,
            'in_delivery' => 0,
            'confirmed' => 0,
        ]);

        //para guardar los detalles en la tabla PedidoDetalles

        $pedido_id = $pedido->id;

        $contenido = $cart->contenido();

        foreach($contenido as $elemento)
        {
            $pedido = PedidoDetalles::create([
                'pedido_id' => $pedido_id,
                'pedido' => $pedido->pedido,
                'comercio_id' => $this->comercio_id,
                'user_id' => auth()->user()->id,
                'product_id' => $elemento->id,
                'name' => $elemento->name,
                'price1' => $elemento->price,
                'quantity' => $elemento->quantity,
            ]);
        }

        $cart->onlyClear();

        return redirect()->route('pasarela', ['pedido' => $pedido->pedido]);

    }
    

    public function updateQuantity($id, $value, $operacion)
    {
        switch ($operacion) {
            case '-':
                if($value > 0){
                    $value--;
                    if($value > 0){
                        \Cart::update($id,
                            array(
                                'quantity' => array(
                                    'relative' => false,
                                    'value' => $value
                                ),
                        ));
                    }else{
                        \Cart::remove($id);
                    }
                } 
                break;
            
            case '+':                
                    $value++;
                    \Cart::update($id,
                        array(
                            'quantity' => array(
                                'relative' => false,
                                'value' => $value
                            ),
                    ));
                break;
        }


        $cartCollection = \Cart::getContent();

        return redirect()->back()->with(['cartCollection' => $cartCollection]);
        // return view('livewire.cart.cart')->with('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);
        // return redirect()->route('cart.index')->with('success_msg', 'El Carrito ha sido Actualizado');
    }

    public function index()
    {
        $setting = Setting::find(1)->first();

        $words = '';

        $conf = Setting::where('id', 1)->first();
        
        $cartCollection = \Cart::getContent();

        return view('cart.cart', [
            'in_cellphonecontact' => $setting->in_cellphonecontact, 
            'comercio_id' => 1,
            'manufacturer_id' => 0,
            'modelo_id' => 0,
            'motor_id' => 0, 
            'words' => $words,
            'cartCollection' => $cartCollection,
        ]);
    }

    public function render()
    {

        $setting = Setting::find(1)->first();

        $words = '';

        $conf = Setting::where('id', 1)->first();
        
        $cartCollection = \Cart::getContent();

        return view('livewire.cart.cart1', [
            'in_cellphonecontact' => $setting->in_cellphonecontact, 
            'comercio_id' => 1,
            'manufacturer_id' => 0,
            'modelo_id' => 0,
            'motor_id' => 0, 
            'words' => $words,
            'cartCollection' => $cartCollection,
        ]);
    }
}
