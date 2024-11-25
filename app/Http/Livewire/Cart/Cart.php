<?php

namespace App\Http\Livewire\Cart;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Setting;
use App\Models\Pedido;
use App\Http\Controllers\CartController;

class Cart extends AdminComponent
{
    public $comercio_id;

    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;
    }

    public function render()
    {
        $setting = Setting::find(1)->first();

        $words = '';

        $conf = Setting::where('id', 1)->first();
        
        $cartCollection = \Cart::getContent();

        return view('livewire.cart.cart', [
            'in_cellphonecontact' => $setting->in_cellphonecontact, 
            'comercio_id' => $this->comercio_id,
            'manufacturer_id' => 0,
            'modelo_id' => 0,
            'motor_id' => 0, 
            'words' => $words,
            'cartCollection' => $cartCollection,
        ]);
    }

    public function index()
    {
        $setting = Setting::find(1)->first();

        $words = '';

        return view('livewire.cart.cart', [
            'in_cellphonecontact' => $setting->in_cellphonecontact, 
            'comercio_id' => 1,
            'manufacturer_id' => 0,
            'modelo_id' => 0,
            'motor_id' => 0, 
            'words' => $words,
        ]);
    }

    public function updateQuantity($id, $value, $operacion){
        
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

    public function finalizarCompra()
    {
        $cart = new CartController;
        
        
        $pedido = auth()->user()->identificationNumber . '-' . str_replace("-", "", date("Y-m-d")) . str_replace(":", "", date("H:i:s"));

        $pedido = Pedido::create([
            'pedido' => $pedido,
            'comercio_id' => $this->comercio_id,
            'user_id' => auth()->user()->id,
            'description' => '',
            'coste' => $cart->total(),
            'currency' => 1,
            'in_delivery' => 0,
            'confirmed' => 0,
        ]);

        $contenido = $cart->contenido();

        //para guardar los detalles en la tabla PedidoDetalles

        // $cart->onlyClear();

        return redirect()->route('metodospagos');
    }

}
