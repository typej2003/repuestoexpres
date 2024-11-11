<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;

class ResultsProducts extends AdminComponent
{
    public $parametro = '';

    public $informacion = '';

    public $productsRecibidos;

    protected $listeners = ['infoRecibida' => 'actualizarInfo'];

    public function actualizarInfo($data, $manufacturer, $products)
    {
        $this->parametro = $manufacturer;

        $this->informacion = $data;

        $this->productsRecibidos = $products;
    }

    public function mount()
    {
        
    }

    public function render()
    {

        $products = $this->productsRecibidos;

        return view('livewire.components.results-products', [
            'products' => $products,
        ]);
    }
}
