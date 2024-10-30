<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Operacion\MakePayment;
use App\Http\Livewire\Operacion\Pasarela;


use App\Http\Livewire\Components\Currency;

Route::get('/showCurrency', Currency::class,)->name('showCurrency');

Route::get('/MakePayment/{comercioId}', MakePayment::class)->name('MakePayment')->middleware('auth');

Route::get('/pasarela', Pasarela::class)->name('pasarela')->middleware('auth');

Route::get('/enviardataPasarela', [Pasarela::class, 'enviarData'])->name('enviardataPasarela');

