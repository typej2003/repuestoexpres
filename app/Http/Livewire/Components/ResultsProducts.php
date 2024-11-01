<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;

class ResultsProducts extends AdminComponent
{
    public $parametro = '';

    public function mount($parametro)
    {
        $this->parametro = $parametro;
    }

    public function render()
    {

        $products = Product::all();

        return view('livewire.components.results-products', [
            'products' => $products,
        ]);
    }
}
