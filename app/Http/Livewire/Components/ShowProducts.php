<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Support\Facades\Validator;

use App\Models\Product;
use App\Models\Comercio;
use App\Models\Setting;
use App\Models\ValoracionProduct;

class ShowProducts extends AdminComponent
{
    public $comercio_id;

    public $state = [];

    public $ca_valoracion = 0;

    public $currencyValue = 'Bs';

    public $parametro = null;

    protected $listeners = ['infoRecibida' => 'actualizarInfo'];

    public function actualizarInfo($data, $manufacturer, $products)
    {
        $this->parametro = $manufacturer;

        $this->informacion = $data;

    }

    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;

        $this->comercio = Comercio::find($this->comercio_id);

        $setting = Setting::where('user_id', $this->comercio->user_id)->first();

        $this->state['product_id'] = '0';
        $this->state['ca_valoracion'] = 0;
        $this->state['class'] = 'star';

        if($setting){
            $this->currencyValue = $setting->currency;
        }
    }

    

    public function searchClass($puntuacion)
    {
        switch ($puntuacion) {
            case '1':
                return 'one';
                break;
            case '2':
                return 'two';
                break;
            case '3':
                return 'three';
                break;
            case '4':
                return 'four';
                break;
            case '5':
                return 'five';
                break;
        }
    }

    public function registrarValoracion()
    {
        $validatedData = Validator::make($this->state, [
			'comment' => 'nullable',
            'product_id' => 'required',
		])->validate();

        if(auth()->user())
        {
            $valoracion = ValoracionProduct::where('user_id', auth()->user()->id)->where('product_id', $validatedData['product_id'])->first();
            if($valoracion){
                $valoracion->update(['ca_valoracion' => $this->state['ca_valoracion'], 'class' => $this->searchClass($this->state['ca_valoracion']), 'comment' => $validatedData['comment']]);
            }else{
                ValoracionProduct::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $validatedData['product_id'],
                    'ca_valoracion' => $this->state['ca_valoracion'],
                    'class' => $this->searchClass($this->state['ca_valoracion']),
                    'comment' => $validatedData['comment'],
                ]);
            }

            // $this->skipRender();

            $this->dispatchBrowserEvent('hide-valoracionModal', ['message' => 'Gracias por la valoración!']);
            // $this->dispatchBrowserEvent('updateStar', ['comercio_id' => $comercio_id, 'puntuacion' => $puntuacion, 'class' => $class,]);
        }
    }

    public function valorar($product_id, $puntuacion, $classV)
	{
        if (auth()->user()) {

            $this->state['product_id'] = $product_id;
            $this->state['class'] = $classV;
            $this->state['ca_valoracion'] = $puntuacion;
            $this->state['comment'] = '';

            $this->ca_valoracion = $puntuacion;

            $this->dispatchBrowserEvent('show-valoracionModal', ['classV' => $classV, 'ca_valoracion' => $puntuacion, 'product_id' => $product_id]);
        }
        else{
            // $this->dispatchBrowserEvent('show-loginModalShow');
            $this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Debe iniciar session para valoración!']);
        }
	}

    public function valorar1($puntuacion)
	{
        $this->state['ca_valoracion'] = $puntuacion;
        $this->ca_valoracion = $puntuacion;
        $this->skipRender();
	}

    public function render()
    {
        $products = Product::where('comercio_id', $this->comercio_id)
                    ->with('valoracionProduct')
                            ->paginate();
        
        if($this->parametro == null){
            return view('livewire.components.show-products',[
                'products' => $products 
            ]);
        }else{
            return '';
        }
        
    }
}
