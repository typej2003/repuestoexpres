<?php

namespace App\Http\Livewire\Components;
use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;
use App\Models\Comercio;
use App\Models\Setting;

class CarouselOffer extends AdminComponent
{
    public $comercioId;

    public $currencyValue = 'Bs';

    public function mount($comercioId = 1)
    {
        $this->comercioId = $comercioId;

        $this->comercio = Comercio::find($comercioId);

        $setting = Setting::where('user_id', $this->comercio->user_id)->first();

        if($setting){
            $this->currencyValue = $setting->currency;
        }
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
