<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Subcategory;

class MarcasProductos extends AdminComponent
{
    public function render()
    {
        $subcategorias = Subcategory::where('comercio_id', 1)->get();

        return view('livewire.components.marcas-productos', [
            'subcategorias' => $subcategorias,
        ]);
    }
}
