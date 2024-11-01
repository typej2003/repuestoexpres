<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainSearch extends Controller
{
    public $parametro = '';

    public function index($parametro)
    {
        $this->parametro = $parametro;

        return view('MainSearch', [
            'parametro' => $parametro,
        ]);
    }
}
