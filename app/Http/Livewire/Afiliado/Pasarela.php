<?php

namespace App\Http\Livewire\Afiliado;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\DatosBasicos;
use App\Models\Comercio;
use App\Models\Banco;
use App\Models\Transaccion;
use App\Models\Pedido;

class Pasarela extends Component
{
    public $id_suc;
    public $tokenId;
    public $state = [];
    public $showEditModal = false;
    public $comercio_id;
    public $pedido;
    public $comercio;

    public $clienteId = 0;
    public $currency = 1; // Bolivar
    public $currencyValue = '$';
    public $amount = 1; //monto
    public $reference = '12345678'; // Pedido a pagar
    public $title = 'Esto es un titulo';
    public $description = 'Esto es una descripcion';
    public $email = 'typej2003@gmail.com';
    public $cellphone = '';
    public $rifLetter = 'J';
    public $rifNumber = ''; // J G
    public $identificationNac = 'V'; // V E P
    public $identificationNumber = '';

    public function mount($pedido, $comercioId)
	{
        $this->pedido = Pedido::where('pedido', $pedido)->first();
		$this->comercio_id = $comercioId;

        $this->autenticarComercio($comercioId, $this->pedido->comercio_id);        
        
        if($this->pedido)
        {
            $this->reference = $this->pedido->pedido;
            $this->title = $this->pedido->title;
            $this->description = $this->pedido->description;
            $this->clienteId = $this->pedido->user_id;
            $this->amount = $this->pedido->coste;
            $this->currency = $this->pedido->currency;
            $this->currencyValue = $this->searchCurrency($this->pedido->currency);
            $cliente = $this->pedido->client;            
            $this->email = $cliente->email;
            $this->cellphonecode = $cliente->datosbasicos->cellphonecode;
            $this->cellphone = $cliente->datosbasicos->cellphone;
            $this->identificationNac = $cliente->identificationNac;
            $this->identificationNumber = $cliente->identificationNumber;
            $this->comercio = Comercio::find($this->pedido->comercio_id);
        }
        
	}

    public function searchCurrency($currency)
    {
        switch ($currency) {
            case '1':
                return 'Bs';
                break;
            
            case '2':
                return '$';
                break;
        }
    }

    public function autenticarComercio($comercio_id, $comercio2_id)
    {
        if($comercio_id != $comercio2_id)
        {
            return redirect('/errorFound/12');
        }
        
    }

    public function procesado(Request $request)
	{
		$this->tokenId = $request->get('ID');

        $this->id_suc = $request->get('ID'); 

        dd($request);
		
	}

    public function enviarDataPasarela(Request $request){

        
        $operacion = $request->get('datos');

        $comercio = Comercio::find($operacion['comercio_id']);

        $operacion['user_id'] = $comercio->user_id;

        $operacion['banco'] = '';
        if($operacion['codigo']){
            $banco = Banco::where('codigo', $operacion['codigo'])->first();
            $operacion['banco'] = $banco->name;
        }
        
        $transaccion = Transaccion::create($operacion);

        if($transaccion){
            $data = ['state'=> 'ok'];
        }
        else{
            $data = ['state'=> 'fallido'];
        }
        
        return response()->json($data);

    }

    public function render()
    {
        return view('livewire.afiliado.pasarela');
    }
}
