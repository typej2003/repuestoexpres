<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

use App\Models\Product;

class SectionManufacturers extends Component
{
    public $comercio_id;

    public function mount($comercioId = 1 )
    {
        $this->comercio_id = $comercioId;
    }

    public function render()
    {

        $manufacturers = Product::where('comercio_id', $this->comercio_id)
                            ->paginate();

        return view('livewire.components.section-manufacturers',[
            'manufacturers' => $manufacturers 
        ]);

    }
    
}
