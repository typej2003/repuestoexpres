<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;
use App\Models\Comercio;
use App\Models\Setting;
use App\Models\Valoracion;

class ShowProducts extends AdminComponent
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

    public function valorar($referred, $product_id, $puntuacion)
	{
		$valoracion = Valoracion::where('referred', $referred)->where('user_id', auth()->user()->id)->where('product_id', $product_id)->first();
		if($valoracion){
			$valoracion->update(['ca_valoracion' => $puntuacion]);
		}else{
			Valoracion::create([
				'user_id' => auth()->user()->id,
				'comercio_id' => 0,
				'product_id' => $product_id,
				'ca_valoracion' => $puntuacion,
				'referred' => $referred,
				'comment' => '',
			]);
		}

        $this->skipRender();

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Gracias por la valoración!']);
		// $this->dispatchBrowserEvent('updateStar', ['comercio_id' => $comercio_id, 'puntuacion' => $puntuacion, 'class' => $class,]);
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
