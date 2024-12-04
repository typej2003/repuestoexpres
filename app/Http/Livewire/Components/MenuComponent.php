<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Menu; 

class MenuComponent extends AdminComponent
{
    public $comercio_id;

    public function mount($comercioId=1)
    {
        $this->comercio_id = $comercioId;
    }

    public function render()
    {

        $menus = Menu::where('comercio_id', $this->comercio_id)
            ->where('menu', 1)
            ->orderBy('posicion', 'asc')
            ->get();

        return view('livewire.components.menu-component', [
            'menus' => $menus,
        ]);
    }
}
