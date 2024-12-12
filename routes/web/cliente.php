<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Cliente\ListPedidosCliente;
use App\Http\Livewire\Cliente\DatosFacturacion;
use App\Http\Livewire\Cliente\DetallesPedido;

Route::get('/listPedidosCliente', ListPedidosCliente::class)->name('listPedidosCliente')->middleware('auth');
Route::get('/datosfacturacion', DatosFacturacion::class)->name('datosfacturacion')->middleware('auth');
Route::get('/detallespedido/{nroPedido}/{comercioId}', DetallesPedido::class)->name('detallespedido')->middleware('auth');