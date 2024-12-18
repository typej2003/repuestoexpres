<?php

namespace App\Http\Livewire\Cliente;

use Livewire\Component;

use App\Models\Country;
use App\Models\Estado;
use App\Models\Cities;

class DatosFacturacion extends Component
{

    public $country = 237;
    public $province;
    public $city;
    public $countries = [], $provinces = [], $cities = [];
    public $comercio_id;

    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;
        $this->provinces = collect();
        $this->cities = collect();

        $this->countries = Country::all();

        $this->provinces = Estado::where('country_id', 237)->get();
    }

    public function updatedCountry($value)
	{
		$this->provinces = Estado::where('country_id', $value)->get();
		// $this->subcategory = $this->subcategories->first()->id ?? null;
	}

    public function updatedProvince($value)
	{
		$this->cities = Cities::where('state_id', $value)->get();
		// $this->subcategory = $this->subcategories->first()->id ?? null;
	}

    public function render()
    {
        return view('livewire.cliente.datos-facturacion');
    }
}
