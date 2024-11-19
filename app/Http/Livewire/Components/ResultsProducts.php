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

    public $manufacturer_id, $modelo_id, $motor_id;

    protected $listeners = ['infoRecibida' => 'actualizarInfo'];

    public function actualizarInfo($data, $manufacturer, $products)
    {
        $this->parametro = $manufacturer;

        $this->informacion = $data;

        $this->productsRecibidos = $products;
    }

    public function mount($comercioId = 1, $parametro, $manufacturer_id, $modelo_id, $motor_id)
    {
        $this->comercio_id = $comercioId;

        $this->parametro = $parametro;
        
        $this->manufacturer_id = $manufacturer_id;

        $this->modelo_id = $modelo_id;

        $this->motor_id = $motor_id;
        
    }

    public function render()
    {

        $this->parametro = 'XXX';

        //$products = Product::where('name', $this->parametro)->paginate(15);

        $products = Product::paginate(15);

        return view('livewire.components.results-products', [
            'products' => $products,
        ]);
    }
}
