<?php

namespace App\Http\Livewire\Carrito;

use Livewire\Component;

use Illuminate\Http\Request;

class CartDrop extends Component
{
    public $currencyValue;

    protected $listeners = [
        'emitCurrency' => 'emitCurrency'
    ];

    public function mount()
    {
        $this->currencyValue = request()->cookie('currency');
    }

    public function emitCurrency($currencyValue, Request $request)
    {
        $this->currencyValue = $request->cookie('currency');

    }

    public function render()
    {
        return view('livewire.carrito.cart-drop');
    }
}
