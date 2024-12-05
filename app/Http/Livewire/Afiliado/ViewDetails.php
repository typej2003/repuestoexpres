<?php

namespace App\Http\Livewire\Afiliado;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;

class ViewDetails extends AdminComponent
{
    public $comercio_id;
    public $product_id;

    public function mount($comercioId, $productId)
    {
    	$this->comercio_id = $comercioId;
        $this->product_id = $productId;
        dd('mount');
    }

    public function render()
    {
        $product = Product::find($this->product_id);

        $comercio_id = $request->get('comercio_id');
        if(empty($comercio_id)){
            $comercio_id = 1;
        }
        $setting = Setting::find($comercio_id)->first();

        return view('livewire.afiliado.view-details', [
            'product' => $product,
            'in_cellphonecontact' => $setting->in_cellphonecontact,
            'in_sliderprincipal' => $setting->in_sliderprincipal,
            'in_marcasproductos' => $setting->in_marcasproductos,
        ]);
    }
}
