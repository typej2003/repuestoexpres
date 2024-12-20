<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Operacion\MakePayment;

use App\Http\Livewire\Recursos\Selectul;

use App\Http\Livewire\Components\Currency;

use App\Http\Livewire\Components\MenuComponent;

use App\Http\Livewire\Afiliado\Pasarela;
use App\Http\Livewire\Afiliado\Shipping;

Route::get('/pasarela/{nropedido}/{comercioId}', Pasarela::class)->name('pasarela')->middleware('auth');
Route::get('/enviarDataPasarela', [Pasarela::class, 'enviarDataPasarela'])->name('enviardataPasarela');

Route::get('/shipping/{nropedido}', Shipping::class)->name('shipping')->middleware('auth');

// extras

Route::get('/showCurrency', Currency::class,)->name('showCurrency');

Route::get('/menu', MenuComponent::class,)->name('menu');

Route::get('/MakePayment/{comercioId}', MakePayment::class)->name('MakePayment')->middleware('auth');

Route::get('/selectul', Selectul::class)->name('selectul');