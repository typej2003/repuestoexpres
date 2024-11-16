<?php

namespace App\Http\Controllers;
use App\Http\Livewire\Admin\AdminComponent;

use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Category;

class WelcomeController extends Controller
{
    protected $listeners = ['prueba' => 'prueba'];

    public $words = '';

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

        return view('welcome', [
            'words' => $words,
            'manufacturer_id' => $manufacturer_id,
            'modelo_id' => $modelo_id,
            'motor_id' => $motor_id,
        ]);
        return redirect()->route('welcome');
    }


}
