<?php

namespace App\Http\Livewire\Cart;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Http\Request;

use Cart;

use App\Models\Setting;

class Cart1 extends AdminComponent
{
    public $comercio_id; 

    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;
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
