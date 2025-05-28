<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/monthly-sales-by-region',[OrderController::class,'index'])->name('/');;
Route::get('/search',[OrderController::class,'search'])->name('search');;

Route::get('/top-categories-by-store',[StoreController::class,'index'])->name('store');;
Route::get('/storesearch',[StoreController::class,'search'])->name('storesearch');;