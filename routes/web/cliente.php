<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Cliente\ListPedidosCliente;
use App\Http\Livewire\Cliente\DatosFacturacion;

Route::get('/listPedidosCliente', ListPedidosCliente::class)->name('listPedidosCliente')->middleware('auth');
Route::get('/datosfacturacion', DatosFacturacion::class)->name('datosfacturacion')->middleware('auth');