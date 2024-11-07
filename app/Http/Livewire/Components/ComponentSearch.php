<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Manufacturer;
use App\Models\Modelo;
use App\Models\Motor;
use App\Models\Comercio;

class ComponentSearch extends AdminComponent
{
    public $state = [];
    public $comercio_id;
    public $manufacturer_id;

    public function mount($comercio_id = 1)
    {
        $this->comercio_id = $comercio_id;
    }

    public function changeModelo($manufacturer_id)
	{	
        if($manufacturer_id == 0)
        {
            $msg2 = 'Seleccione un modelo';
            $msg3 = 'Seleccione un motor';
            $this->state['manufacturer_id'] = 0;
            $this->state['modelo_id'] = 0;
            $this->state['motor_id'] = 0;

            $this->dispatchBrowserEvent('sendReset1', ['msg2' => $msg2, 'msg3' => $msg3 ]);

            return 0;
        }

        $this->manufacturer_id = $manufacturer_id;

		$modelos = Modelo::where('manufacturer_id', $manufacturer_id)->get();	

		if($modelos->count() > 0){
			$msg = 'Seleccione un modelo';
			$this->state['modelo_id'] = 0;
		}else{
			$msg = 'No posee modelos';
			$this->state['modelo_id'] = 0;
		}

        $this->skipRender();
        		
		$this->dispatchBrowserEvent('sendModelos', ['modelos' => $modelos, 'msg' => $msg]);
	}

    public function changeMotor($modelo_id )
	{	
        if($modelo_id == 0)
        {            
            $msg3 = 'Seleccione un motor';
            $this->state['modelo_id'] = 0;
            $this->state['motor_id'] = 0;

            $this->dispatchBrowserEvent('sendReset2', ['msg3' => $msg3 ]);

            return 0;
        }

		$motors = Motor::where('manufacturer_id', $this->manufacturer_id)->where('modelo_id', $modelo_id)->get();

		if($motors->count() > 0){
			$msg = 'Seleccione un motor';
			$this->state['motor_id'] = 0;
		}else{
			$msg = 'No posee motores';
			$this->state['motor_id'] = 0;
		}

        $this->skipRender();
        		
		$this->dispatchBrowserEvent('sendMotores', ['motors' => $motors, 'msg' => $msg]);
	}

    public function render()
    {
        $comercio = Comercio::find($this->comercio_id);

        return view('livewire.components.component-search', [
            'comercio' => $comercio,
        ]);
    }
}
