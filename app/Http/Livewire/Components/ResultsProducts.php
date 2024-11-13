<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;

class ResultsProducts extends AdminComponent
{
    public $parametro = '';

    public $informacion = '';

    public $productsRecibidos;

    public $comercio_id;

    protected $listeners = ['infoRecibida' => 'actualizarInfo'];

    public function actualizarInfo($data, $manufacturer, $products)
    {
        $this->parametro = $manufacturer;

        $this->informacion = $data;

        $this->productsRecibidos = $products;
    }

    public function mount($comercioId = 1, $parametro)
    {
        $this->comercio_id = $comercioId;

        $this->parametro = $parametro;
        
    }

    public function render()
    {

        $products = Product::where('name', $this->parametro)->paginate(15);

        return view('livewire.components.results-products', [
            'products' => $products,
        ]);
    }
}
