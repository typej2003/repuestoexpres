<?php

namespace App\Http\Controllers;
use App\Http\Livewire\Admin\AdminComponent;

use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Category;
use App\Events\NewEventCreated;

class WelcomeController extends Controller
{
    protected $listeners = ['receiveManufacturerS' => 'receiveManufacturerS', 'receiveModeloS' => 'receiveModeloS', 'receiveMotorS' => 'receiveMotorS'];

    public $words = '';

    public $state = [];

    public $manufacturer_id, $modelo_id, $motor_id;

    public function __invoke(Request $request)
    {
        $comercio = null;
        $existe = false;
        //->
        $peticion = explode('/', \Request::getRequestUri());

        if($peticion[1] !== ''){
            $comercio = Comercio::where('name', $peticion[2])->first();
        }
        
        if($comercio){
            $existe = true;
        }else{
            $categories = Category::where('comercio_id', 1)->get();
        }

        dd($request);

        return view('welcome', [
            'existe' => $existe,
            'comercio' => $comercio,
            'categories' => $categories,
        ]);
        
    }

    public function index(Request $request){

        $words = '';

        if ($request->isMethod('post')) 
        {
            if($request->post('words'))
            {
                if($request->post('words') !== '')
                {
                    $words = $request->post('words');
                    
                }
            }
            if($request->post('categ'))
            {
                if($request->post('categ') !== '')
                {
                    $words .= $request->post('categ');
                }
            }

            $manufacturer_id = $request->post('manufacturer_id');
            $modelo_id = $request->post('modelo_id');
            $motor_id = $request->post('motor_id');

            // dd($request);

            if($request->post('manufacturer_id'))
            {
                $words .= ' ';
            }

            // event(new NewEventCreated());

        }else{ // Method get
            if($request->get('words'))
            {
                if($request->get('words') !== '')
                {
                    $words = $request->get('words');
                    
                }
            }
            if($request->get('categ'))
            {
                if($request->get('categ') !== '')
                {
                    $words .= $request->get('categ');
                }
            }

            $manufacturer_id = $request->get('manufacturer_id');
            $modelo_id = $request->get('modelo_id');
            $motor_id = $request->get('motor_id');

            // dd($request);

            if($request->get('manufacturer_id'))
            {
                $words .= ' ';
            }

            // event(new NewEventCreated());

        }

        return view('welcome', [
            'words' => $words,
            'manufacturer_id' => $manufacturer_id,
            'modelo_id' => $modelo_id,
            'motor_id' => $motor_id,
        ]);
        return redirect()->route('welcome');
    }

    public function receiveManufacturerS ($manufacturerS_id=0)
    {
        $this->state['manufacturer_id'] = $manufacturerS_id;

        $this->manufacturer_id = $manufacturerS_id;

    //    $this->dispatchBrowserEvent('sendCategories', ['categories' => $this->categories, 'message' => 'variables enviadas satisfactoriamente!']);
    }

    public function receiveModeloS ($modeloS_id=0)
    {
        $this->state['modelo_id'] = $modeloS_id;

        $this->modelo_id = $modeloS_id;

    //    $this->dispatchBrowserEvent('sendCategories', ['categories' => $this->categories, 'message' => 'variables enviadas satisfactoriamente!']);
    }

    public function receiveMotorS ($motorS_id=0)
    {
        $this->state['motor_id'] = $motorS_id;

        $this->motor_id = $motorS_id;

    //    $this->dispatchBrowserEvent('sendCategories', ['categories' => $this->categories, 'message' => 'variables enviadas satisfactoriamente!']);
    }

}
