<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\WelcomeWire;

use App\Http\Controllers\MainSearch;

use App\Http\Controllers\SearchController;

use App\Http\Controllers\Admin\SearchAfiliado;

use App\Http\Livewire\Admin\Settings\ListMetodosPagos;

use App\Http\Livewire\Recursos\ApiController;

use App\Http\Livewire\Recursos\EmailExample;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return view('welcome');
 });

 Route::get('/cat/{parametro}', [MainSearch::class, 'index'])->name('mainSearch'); 


// Route::get('/com/{comercio}', WelcomeController::class)->name('welcomecomercio');
Route::get('/com/{comercio}', WelcomeWire::class)->name('welcomecomercio');
Route::get('/pas/{comercio}', SearchAfiliado::class)->name('searchafiliado');

// Route::get('/', WelcomeController::class)->name('welcome');
//Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

// Route::get('/', WelcomeWire::class)->name('welcome-wire');

Route::get('/listMetodosPagos', ListMetodosPagos::class)->name('listMetodosPagos')->middleware('auth');

Route::get('/api/apicontroller', ApiController::class)->name('api.apicontroller')->middleware('auth');

Route::get('/ProcessPaymentDemo/0', [ApiController::class, 'recibirDatos'])->name('ProcessPaymentDemo');

Route::get('/CheckPaymentAjax/0', [ApiController::class, 'ChequePago'])->name('CheckPaymentAjax')->middleware('auth');

Route::controller(SearchController::class)->group(function(){
    Route::get('autocomplete-cliente', 'autocompleteCliente')->name('autocomplete-cliente');
});

Route::get('/enviarData', [SearchAfiliado::class, 'enviarData'])->name('enviardata');

Route::get('/emailexample', EmailExample::class)->name('emailexample');

// Route::get('/{valor1}/{valor2}', function($valor1, $valor2){
//     switch ($valor1) {
//         case 'com':
//             dd('Welcome Comercio');
//             break;
//         case 'pas':
//             dd('Welcome Pasarela');
//             break;
//         case 'search':
//             dd('Search Producto');
//             break;
//         default:
//             # code...
//             break;
//     }
// });
