<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Afiliado\ListComercios;
use App\Http\Livewire\Afiliado\ListMetodosPagosC;
use App\Http\Livewire\Afiliado\ListCategories;
use App\Http\Livewire\Afiliado\ListSubcategories;
use App\Http\Livewire\Afiliado\ListProducts;
use App\Http\Livewire\Afiliado\ListTasas;
use App\Http\Livewire\Afiliado\Product\NewProduct;
use App\Http\Livewire\Afiliado\ListBrand;
use App\Http\Livewire\Afiliado\ListContainers;

Route::get('/listComercios/{userId}', ListComercios::class)->name('listComercios')->middleware('auth');

Route::get('/listMetodosPagosC/{comercioId}', ListMetodosPagosC::class)->name('listMetodosPagosC')->middleware('auth');

Route::get('/listCategories/{comercioId}', listCategories::class)->name('listCategories')->middleware('auth');

Route::get('/newSubcategory/{comercioId}/{categoryId}', listSubcategories::class)->name('listSubcategories')->middleware('auth');

Route::get('/listProducts/{comercioId}', ListProducts::class)->name('listProducts')->middleware('auth');

Route::get('/listTasas/{comercioId}', ListTasas::class)->name('listTasas')->middleware('auth');

Route::get('/newProduct/{comercioId}/{showEditModal}', NewProduct::class)->name('newProduct')->middleware('auth');

Route::get('/listBrand/{comercioId}', ListBrand::class)->name('listBrand')->middleware('auth');

Route::get('/listContainers/{comercioId}', ListContainers::class)->name('listContainers')->middleware('auth');

