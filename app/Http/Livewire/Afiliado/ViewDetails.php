<?php

namespace App\Http\Livewire\Afiliado;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;

class ViewDetails extends AdminComponent
{
    public $comercio_id;
    public $product_id;

    public function mount($comercioId, $productId)
    {
    	$this->comercio_id = $comercioId;
        $this->product_id = $productId;
    }

    public function render()
    {
        $product = Product::find($this->product_id);

        return view('livewire.afiliado.view-details', [
            'product' => $product,
        ]);
    }
}
