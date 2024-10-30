<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\Comercio;
use App\Models\Category;
use App\Models\Tasa;
use App\Models\Setting;

class Navbar extends Component
{

    public $categories;

    public $tasacambio = 1;

    public $currenciesP = [
        '0' => "Bs", 
        '1' => "$",
        '2' => "€"];

    public $dolar = 1;

    public $currencyValue = 'Bs';

    protected $listeners = ['sendCategories' => 'sendCategories'];

    public function mount($comercioId=1){

        $this->categories = Category::where('comercio_id', $comercioId)
                                    ->where('itemMenu', 1)
                                    ->get();
        
        $comercio = Comercio::find($comercioId);
        
        $setting = Setting::where('user_id', $comercio->user_id)->first();

        if($setting){
            if($setting->api_bcv=="SI"){
                $dolar = json_decode(file_get_contents("https://pydolarve.org/api/v1/dollar"), true);

                $dolar = $dolar['monitors']['bcv']['price'];
                
                $this->tasacambio = $dolar;
            }else{
                $tasa = Tasa::where('status','activo')
                    ->where('user_id', $comercio->user_id)
                    ->first();
                    
                if($tasa){
                    $this->tasacambio = $tasa->tasa;
                }else{
                    $this->tasacambio = 1;
                }
            }

        }
        
    }

    public function changeCurrent($currency)
    {
        $this->currencyValue = $currency;

        $this->dispatchBrowserEvent('sendCurrency', ['currencyValue' => $this->currencyValue, 'message' => 'variable enviada satisfactoriamente!']);        
    }

    public function render()
    {
        return view('livewire.layouts.navbar');
    }

    public function sendCategories ($postId=0)
    {
       $this->dispatchBrowserEvent('sendCategories', ['categories' => $this->categories, 'message' => 'variables enviadas satisfactoriamente!']);
    }
}
