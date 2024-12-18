<?php

namespace App\Http\Livewire\Afiliado;

use Livewire\Component;

class ListDeliveryArea extends Component
{
    public $comercio_id;
    
    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;
    }
    public function render()
    {
        return view('livewire.afiliado.list-delivery-area');
    }
}
