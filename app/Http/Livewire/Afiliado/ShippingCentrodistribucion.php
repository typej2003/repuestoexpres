<?php

namespace App\Http\Livewire\Afiliado;

use Livewire\Component;

use App\Models\CentroDistribucion;
use App\Models\Pedido;

class ShippingCentrodistribucion extends Component
{

    public $showEditModal = false;
    public $nropedido; 

    public $searchTerm = null;

    protected $queryString = ['searchTerm' => ['except' => '']];

    public $sortColumnName = 'created_at';

    public $sortDirection = 'desc';

    public function mount($nropedido)
    {
    	$this->nropedido = $nropedido;
    	
    }

    public function addNew()
	{
		$nropedido = $this->nropedido;
		$this->reset();
		$this->nropedido = $nropedido;

		$this->showEditModal = false;

		$this->dispatchBrowserEvent('show-form');
	}

	public function selectCentro()
	{
		
		// session()->flash('message', 'User added successfully!');

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Centro seleccionado satisfactoriamente!']);
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
        $pedido = Pedido::where('pedido', $this->nropedido)->first();

        $centrosmodal = CentroDistribucion::query()
    		->where('comercio_id', $pedido->comercio_id)
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->get();

        return view('livewire.afiliado.shipping-centrodistribucion', ['centrosmodal' => $centrosmodal]);
    }
}
