<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Notificacion\ListNotificaciones;


Route::get('/listNotificaciones/{comercioId}', ListNotificaciones::class)->name('listNotificaciones')->middleware('auth');