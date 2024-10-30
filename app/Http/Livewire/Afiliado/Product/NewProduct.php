<?php

namespace App\Http\Livewire\Afiliado\Product;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

use App\Models\Comercio;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Container;
use App\Models\Product;
use App\Models\Supplier;


class NewProduct extends AdminComponent
{
    use WithFileUploads;
    
    public $comercioId; 
    public $showEditModal = true;

    public $photo;

    public function mount($comercioId, $showEditModal)
    {

        $this->comercioId = $comercioId;

        // dd($this->showEditModal);

        if($showEditModal == 'false'){
            $this->showEditModal = false;
        }
        
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

    public function render()
    {
        $comercio = Comercio::find($this->comercioId);
        $brands = Brand::where('comercio_id', $this->comercioId)->get();
        $categories = Category::where('comercio_id', $this->comercioId)->get();

        return view('livewire.afiliado.product.new-product', [
            'comercio' => $comercio,
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }
}
