<?php

namespace App\Http\Livewire\Cart;

use App\Http\Livewire\Admin\AdminComponent;

use Cart;

use App\Models\Setting;

class Cart1 extends AdminComponent
{
    public function mount()
    {

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
