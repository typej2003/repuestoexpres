<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Subcategory;

class MarcasProductos extends Component
{
    public function render()
    {
        $subcategorias = Subcategory::where('comercio_id', 1)->get();

        return view('livewire.components.marcas-productos', [
            'subcategorias' => $subcategorias,
        ]);
    }
}
