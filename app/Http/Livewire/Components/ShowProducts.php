<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;

class ShowProducts extends AdminComponent
{
    public $comercioId;

    public function mount($comercioId = 1)
    {
        $this->comercioId = $comercioId;
    }

    public function render()
    {
        $products = Product::where('comercio_id', $this->comercioId)
                            ->paginate();

        return view('livewire.components.show-products',[
            'products' => $products 
        ]);
    }
}
