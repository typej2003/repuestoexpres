<?php

namespace App\Http\Livewire\Afiliado;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Brand;
use App\Models\Comercio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class ListBrand extends AdminComponent
{
	use WithFileUploads;

	public $state = [];

	public $brand;

	public $comercioId;

	public $showEditModal = false;

	public $brandIdBeingRemoved = null;

	public $searchTerm = null;

    protected $queryString = ['searchTerm' => ['except' => '']];

    public $sortColumnName = 'created_at';

    public $sortDirection = 'desc';

    public function mount($comercioId)
    {
    	$this->comercioId = $comercioId;
    	
    }

    public function addNew()
	{
		$comercioId = $this->comercioId;
		$this->reset();
		$this->comercioId = $comercioId;

		$this->showEditModal = false;

		$this->dispatchBrowserEvent('show-form');
	}

	public function createBrand()
	{
		$validatedData = Validator::make($this->state, [
			'name' => 'required',
		])->validate();

		$validatedData['comercio_id']=$this->comercioId;

		Brand::create($validatedData);

		// session()->flash('message', 'User added successfully!');

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Marca agregada satisfactoriamente!']);
	}

	public function edit(Brand $brand)
	{
		$comercioId = $this->comercioId;
		$this->reset();
		$this->comercioId = $comercioId;

		$this->showEditModal = true;

		$this->brand = $brand;

		$this->state = $brand->toArray();

		$this->dispatchBrowserEvent('show-form');
	}

	public function updateBrand()
	{
		$validatedData = Validator::make($this->state, [
			'name' => 'required',
		])->validate();

		$this->brand->update($validatedData);

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Marca actualizada satisfactoriamente!']);
	}

	public function confirmBrandRemoval($brandId)
	{
		$this->brandIdBeingRemoved = $brandId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

	public function deleteBrand()
	{
		$brand = Brand::findOrFail($this->brandIdBeingRemoved);

		$brand->delete();

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Marca eliminada satisfactoriamente!']);
	}

    public function sortBy($columnName)
    {
        if ($this->sortColumnName === $columnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortColumnName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function render()
    {
    	$brands = Brand::query()
    		->where('comercio_id', $this->comercioId)
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate(15);

            $comercio = Comercio::find($this->comercioId);

        return view('livewire.afiliado.list-brand', [
        	'brands' => $brands,
            'comercio' => $comercio,
        ]);
    }
}
