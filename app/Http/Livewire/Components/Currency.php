<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

use App\Models\Setting;
use App\Models\Tasa;
use App\Models\Comercio;

class Currency extends Component
{
    public $tasacambio = 1;

    public $currenciesP = [
        '0' => "Bs", 
        '1' => "$",];

    public $dolar = 1;

    public $currencyValue = 'Bs';

    public $comercio;

    public function mount($comercioId = 1)
    {
        $this->comercio = Comercio::find($comercioId);
    }

    public function changeCurrency($currency)
    {
        $this->currencyValue = $currency;

        $setting = Setting::where('user_id', $this->comercio->user_id)->first();

        $setting->update(['currency' => $currency]);

        $this->dispatchBrowserEvent('refreshPage', ['message' => 'Refresh pagina!']);        
    }

    public function render()
    {
        return view('livewire.components.currency');
    }
}
