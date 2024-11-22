<?php

namespace App\Http\Livewire\Cart;

use App\Http\Livewire\Admin\AdminComponent;

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

        return view('livewire.cart.cart1', [
            'in_cellphonecontact' => $setting->in_cellphonecontact, 
            'comercio_id' => 1,
            'manufacturer_id' => 0,
            'modelo_id' => 0,
            'motor_id' => 0, 
            'words' => $words,
        ]);
    }
}
