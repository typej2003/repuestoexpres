<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;

class ResultsProducts extends AdminComponent
{
    public $parametro = '';

    public $informacion = '';

    protected $listeners = ['infoRecibida' => 'actualizarInfo'];

    public function actualizarInfo($data, $manufacturer)
    {
        $this->parametro = $manufacturer;

        $this->informacion = $data;
    }

    public function mount()
    {
        
    }

    public function render()
    {

        $products = Product::all();

        return view('livewire.components.results-products', [
            'products' => $products,
        ]);
    }
}
