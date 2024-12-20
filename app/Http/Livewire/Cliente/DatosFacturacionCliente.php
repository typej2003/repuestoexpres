<?php

namespace App\Http\Livewire\Cliente;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\Models\DatosFacturacion;
use App\Models\Country;
use App\Models\Estado;
use App\Models\Cities;
use App\Models\DeliveryArea;
use App\Models\Pedido;

class DatosFacturacionCliente extends AdminComponent
{
    public $state = [];
    public $datosfacturacion;
    public $showEditModal = false;
    public $direccionIdBeingRemoved = null;
    public $class = '';
    public $class1 = '';

    public $country = 237;
    public $province;
    public $city;
    public $zona;
    public $countries = [], $provinces = [], $cities = [], $zonas = [];
    public $nropedido;
    public $metodo = 'shipment';
    
    public function mount($nropedido)
    {
        $this->nropedido = $nropedido;
        $this->provinces = collect();
        $this->cities = collect();
        $this->zonas = collect();

        $this->countries = Country::all();
        $this->provinces = Estado::where('country_id', 237)->get();

        $this->state['identificationNac'] = "V";

    }

    public function addNew()
    {
        $this->showEditModal = false;
        $this->class = '';
        $this->class1 = '';
    }

    public function edit(DatosFacturacion $datosfacturacion)
	{
		$nropedido = $this->nropedido;
		$this->reset();
		$this->nropedido = $nropedido;

		$this->showEditModal = true;

		$this->datosfacturacion = $datosfacturacion;

		$this->state = $datosfacturacion->toArray();

        $this->countries = Country::all();
        $this->country = $this->state['country_id'];
        $this->provinces = Estado::where('country_id', $this->country)->get();
        $this->province = $this->state['state_id'];
        $this->cities = Cities::where('state_id', $this->province)->get();
        $this->city = $this->state['city_id'];

		$this->dispatchBrowserEvent('show-form');
	}

    public function updateDatos()
	{
		$validatedData = Validator::make($this->state, [
			'identificationNac' => 'required|not_in:0',
			'identificationNumber' => 'required',
            'names' => 'required',
            'surnames' => 'required',
            'cellphonecode' => 'required|not_in:0',
            'cellphone' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
		])->validate();

		$this->datosfacturacion->update($validatedData);

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Datos de facturacion actualizado satisfactoriamente!']);
	}

    public function confirmDireccionRemoval($direccionId)
	{
		$this->direccionIdBeingRemoved = $direccionId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

	public function deleteDireccion()
	{
		$direccion = DatosFacturacion::findOrFail($this->direccionIdBeingRemoved);

		$direccion->delete();

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Direccion eliminada satisfactoriamente!']);
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

    public function updatedCity($value)
	{
		$this->zonas = DeliveryArea::where('city_id', $value)->get();
		// $this->subcategory = $this->subcategories->first()->id ?? null;
	}

    public function seleccionar(DatosFacturacion $datosfacturacion)
    {
        $this->state = $datosfacturacion->toArray();

        $this->countries = Country::all();
        $this->country = $this->state['country_id'];
        $this->provinces = Estado::where('country_id', $this->country)->get();
        $this->province = $this->state['state_id'];
        $this->cities = Cities::where('state_id', $this->province)->get();
        $this->city = $this->state['city_id'];
        
        $this->showEditModal = true;
        $this->class = 'readonly';
        $this->class1 = 'disabled';
        
    }

    public function siguiente()
    {
        $validatedData = Validator::make($this->state, [
            'identificationNac' => 'required|not_in:0',
			'identificationNumber' => 'required',
            'names' => 'required',
            'surnames' => 'required',
            'cellphonecode' => 'required|not_in:0',
            'cellphone' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
		])->validate();
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['country_id'] = $this->country;
        $validatedData['state_id'] = $this->province;
        $validatedData['city_id'] = $this->city;
        $validatedData['zona_id'] = $this->zona;

        if($this->class !== 'readonly')
        {
            DatosFacturacion::create($validatedData);
        }

        // Agregar datos de facturacion al pedido
        //$validatedData['nropedido'] = $this->nropedido;
        $validatedData['shipping'] = $this->metodo;

        $pedido = Pedido::where('pedido', $this->nropedido)->first();

        $pedido->update($validatedData);

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Datos de facturacion actualizado satisfactoriamente!']);

        return redirect()->route('pasarela', ['nropedido' => $pedido->pedido, 'comercioId' => $pedido->comercio_id]);

    }

    public function render()
    {
        $direcciones = DatosFacturacion::where('user_id', auth()->user()->id)->paginate();

        return view('livewire.cliente.datos-facturacion-cliente', ['direcciones'=>$direcciones]);
    }
}
