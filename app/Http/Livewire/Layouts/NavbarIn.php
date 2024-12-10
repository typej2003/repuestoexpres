<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class NavbarIn extends Component
{
    public $totalQuantityCart = 0;
    
    public function render()
    {
        return view('livewire.layouts.navbar-in');
    }
}
