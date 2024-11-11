<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;

use App\Models\Comercio;
use App\Models\Manufacturer;
use App\Models\Modelo;
use App\Models\Motor;

class ComponentSearch extends AdminComponent
{
    public $comercio_id = 0;

    #[Validate] 
	public $manufacturer;
	public function rules()
    {
        return [
            'manufacturer_id' => 'required|not_in:0',
        ];
    }

    public $modelo;
    public $motor;
	public $manufacturers = [], $modelos = [], $motores = [];

    public $manufacturer_id, $modelo_id, $motor_id;

    public function mount($comercioId = 0)
    {
        $this->comercio_id = $comercioId;

		// $this->manufacturers = Manufacturer::where('comercio_id', $this->comercio_id)->get();
		
		$this->modelos = collect();

        $this->motores = collect();
    }

    public function updatedManufacturer($value)
	{
        $this->manufacturer_id = $value;
		$this->modelos = Modelo::where('manufacturer_id', $value)->get();
		// $this->subcategory = $this->subcategories->first()->id ?? null;

        $this->updatedModelo(0);
	}

    public function updatedModelo($value)
	{
        $this->modelo_id = $value;
		$this->motores = Motor::where('manufacturer_id', $this->manufacturer_id)->where('modelo_id', $value)->get();
		// $this->subcategory = $this->subcategories->first()->id ?? null;
	}

    public function render()
    {
        $comercio = Comercio::find($this->comercio_id);

        return view('livewire.components.component-search', [
            'comercio' => $comercio,
        ]);
    }
}
