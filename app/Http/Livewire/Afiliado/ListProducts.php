<?php

namespace App\Http\Livewire\Afiliado;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\User;
use App\Models\Comercio;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class ListProducts extends AdminComponent
{
	use WithFileUploads;

	public $state = [];

	public $product;

	public $showEditModal = false;

	public $productIdBeingRemoved = null;

	public $searchTerm = null;

    protected $queryString = ['searchTerm' => ['except' => '']];

    public $sortColumnName = 'created_at';

    public $sortDirection = 'desc';

    public $comercioId = 0;

	public $photo;

	public $screenResolution;

	protected $listeners = [
		'sendResolution'
   		];

	public function sendResolution($screenResolution){
		$this->screenResolution = $screenResolution;
	}	

    public function mount($comercioId = 0)
    {
        $this->comercioId = $comercioId;
    }

	public function changeRole(Comercio $product, $status)
	{
		Validator::make(['status' => $status], [
			'status' => [
				'required',
				Rule::in(User::ROLE_ACTIVE, User::ROLE_NOACTIVE),
			],
		])->validate();

		$comercio->update(['status' => $status]);

		$this->dispatchBrowserEvent('updated', ['message' => "Estado cambió a {$role} satisfactoriamente."]);
	}

	public function changeCategory($categoryId, $subcategory)
	{	
		$subcategories = Subcategory::where('category_id', $categoryId)->get();	

		if(!$subcategories){
			$msg = 'Seleccione una opción';
			$this->state['subcategory_id'] = 0;
		}else{
			$msg = 'No posee Subcategoria';
			$this->state['subcategory_id'] = 0;
		}

		
		$this->dispatchBrowserEvent('sendSubcategories', ['subcategories' => $subcategories, 'subcategory' => $subcategory, 'msg' => $msg]);
	}

	public function addNew()
	{   
        $comercioId = $this->comercioId;
		$screenResolution = $this->screenResolution;

		$this->reset();		

        $this->comercioId = $comercioId;
		$this->screenResolution = $screenResolution;

		$this->showEditModal = false;

		$editModal = 'false';
		
		if ($this->screenResolution < 1024) {
			$this->dispatchBrowserEvent('show-form');	
		}elseif ($this->screenResolution < 1280) {
			$this->dispatchBrowserEvent('show-form');
		}else {
			return redirect()->route('newProduct', ['comercioId' => $this->comercioId, 'editModal' => $editModal] );
		}
		
	}

	public function createProduct()
	{
		$validatedData = Validator::make($this->state, [
			'name' => 'required',
            'category_id' => 'required|not_in:0',
            'subcategory_id' => 'nullable',
		])->validate();

		if ($this->photo) {
			$validatedData['avatar'] = $this->photo->store('/', 'avatarsproducts');
		}

        $comercio = Comercio::find($this->comercioId);

        $validatedData['user_id'] = $comercio->user_id;
        $validatedData['comercio_id'] = $this->comercioId;

		Product::create($validatedData);

		// session()->flash('message', 'User added successfully!');

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Producto agregado satisfactoriamente!']);
	}

	public function edit(Product $product)
	{
		$comercioId = $this->comercioId;

		$this->reset();

        $this->comercioId = $comercioId;

		$this->showEditModal = true;

		$this->product = $product;

		$this->state = $product->toArray();

		$subcategory = Subcategory::find($this->state['subcategory_id']);

		$this->changeCategory($this->state['category_id'], $subcategory->name);

		$this->dispatchBrowserEvent('show-form');
	}

	public function updateProduct()
	{
		$validatedData = Validator::make($this->state, [
			'name' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
		])->validate();

		if ($this->photo) {
			$validatedData['avatar'] = $this->photo->store('/', 'avatarsproducts');
		}

		$this->product->update($validatedData);

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Producto actualizado satisfactoriamente!']);
	}

	public function confirmProductRemoval($productId)
	{
		$this->productIdBeingRemoved = $productId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

	public function deleteProduct()
	{
		$product = Product::findOrFail($this->productIdBeingRemoved);

		$product->delete();

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Producto eliminado satisfactoriamente!']);
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
        if($this->comercioId > 0 ){
            $products = Product::query()
                ->where('comercio_id', $this->comercioId);
        }else{
            $products = Product::query();
        }
        
    	$products = $products
            ->where(function($q){
                $q->where('name', 'like', '%'.$this->searchTerm.'%');                
            })
    		->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate(15);
        
        if($this->comercioId > 0) {
            $comercio = Comercio::find($this->comercioId);
            $user = User::find($comercio->user_id);
        }else{
            $comercio = Comercio::find(1);
            $user = auth()->user();
        }        
		
        return view('livewire.afiliado.list-products', [
            'user'  => $user,
            'comercio'  => $comercio,
        	'products' => $products,
        ]);
    }
}
