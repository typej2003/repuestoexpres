<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Support\Facades\Validator;

use App\Models\Product;
use App\Models\Comercio;
use App\Models\Setting;
use App\Models\Valoracion;

class ShowProducts extends AdminComponent
{
    public $comercio_id;

    public $state = [];

    public $currencyValue = 'Bs';

    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;

        $this->comercio = Comercio::find($this->comercio_id);

        $setting = Setting::where('user_id', $this->comercio->user_id)->first();

        $this->state['product_id'] = '0';

        if($setting){
            $this->currencyValue = $setting->currency;
        }
    }

    public function valorar1($puntuacion)
	{
        $this->state['puntuacion'] = $puntuacion;

	}

    public function registrarValoracion()
    {
        $validatedData = Validator::make($this->state, [
			'comment' => 'nullable',
		])->validate();


        if(auth()->user())
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
    }

    public function valorar($referred, $product_id, $puntuacion)
	{
        if (auth()->user()) {
            $this->state['product_id'] = $product_id;

            $this->state['referred'] = $referred;

            $this->dispatchBrowserEvent('show-valoracionModal');
        }
        else{
            // $this->dispatchBrowserEvent('show-loginModalShow');
            $this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Debe iniciar session para valoración!']);
        }
	}

    public function render()
    {
        $products = Product::where('comercio_id', $this->comercio_id)
                            ->paginate();

        return view('livewire.components.show-products',[
            'products' => $products 
        ]);
    }
}
