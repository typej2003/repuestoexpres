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

    public function valorar($comercio_id, $puntuacion)
	{
		$valoracion = Valoracion::where('comercio_id', $comercio_id)->first();
		if($valoracion){
			$valoracion->update(['ca_valoracion' => $puntuacion]);
		}else{
			Valoracion::create([
				'user_id' => auth()->user()->id,
				'comercio_id' => $comercio_id,
				'product_id' => 0,
				'ca_valoracion' => $puntuacion,
				'referred' => 1,
				'comment' => '',
			]);
		}

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Valoración actualizada satisfactoriamente!']);
		// $this->dispatchBrowserEvent('updateStar', ['comercio_id' => $comercio_id, 'puntuacion' => $puntuacion, 'class' => $class,]);
	}

    public function render()
    {
        $offers = Product::where('comercio_id', $this->comercioId)
                            ->where('in_offer', '1')
                            ->paginate();

        return view('livewire.components.carousel-offer',[
            'offers' => $offers 
        ]);
    }
}
