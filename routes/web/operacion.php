<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Operacion\MakePayment;

use App\Http\Livewire\Recursos\Selectul;

use App\Http\Livewire\Components\Currency;

use App\Http\Livewire\Components\MenuComponent;

Route::get('/showCurrency', Currency::class,)->name('showCurrency');

Route::get('/menu', MenuComponent::class,)->name('menu');

Route::get('/MakePayment/{comercioId}', MakePayment::class)->name('MakePayment')->middleware('auth');

Route::get('/selectul', Selectul::class)->name('selectul');