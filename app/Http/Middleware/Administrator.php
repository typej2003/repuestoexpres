<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->setCookie();

        if (auth()->check() && (auth()->user()->isAdmin() 
            || auth()->user()->isUser()
            || auth()->user()->isCliente()
            || auth()->user()->isAfil())) 
        {
            return $next($request);
        }
        
        abort(403);
    }

    public function setCookie()
    {
        // $dominio = str_replace(\Request::url(), '', \Request::fullUrl());
        $fullUrl = \Request::fullUrl();

        $cadena = "http://192.168.1.4:8000";

        // $cadena = "https://repuestoexpres.com";

        if (strlen(strstr($fullUrl, $cadena))>0) {
            $url = $cadena;
        }

        $cookie_name = "infosite";
        $cookie_value = $url;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //name,value,time,url
        
        // setcookie('infosite','',time() - 1);
        // if(empty($_COOKIE['infosite'])){
        //     $this->dispatchBrowserEvent('update', ['message' => 'No existe el cookie!']);
        //     dd('No existe el cookie!');
        // }else{
        //     dd($_COOKIE['infosite']);
        // }
    }

}

