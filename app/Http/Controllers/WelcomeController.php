<?php

namespace App\Http\Controllers;
use App\Http\Livewire\Admin\AdminComponent;

use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Category;

class WelcomeController extends Controller
{
    protected $listeners = ['prueba' => 'prueba'];

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

        return view('welcome', [
            'existe' => $existe,
            'comercio' => $comercio,
            'categories' => $categories,
        ]);
        
    }

    public function index(){
        return redirect()->route('welcome-wire');
    }


}
