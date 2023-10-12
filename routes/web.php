<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index']);
Route::resource('produk', ProdukController::class);
