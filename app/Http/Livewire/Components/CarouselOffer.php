<?php

namespace App\Http\Livewire\Components;
use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Product;

class CarouselOffer extends AdminComponent
{
    public $comercioId;

    public function mount($comercioId = 1)
    {
        $this->comercioId = $comercioId;
    }

    public function render()
    {
        $offers = Product::where('comercio_id', $this->comercioId)
                            ->where('on_offer', '1')
                            ->paginate();

        return view('livewire.components.carousel-offer',[
            'offers' => $offers 
        ]);
    }
}
