<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[OrderController::class,'index']);
Route::get('/search',[OrderController::class,'search']);

Route::get('/store',[StoreController::class,'index']);
Route::get('/storesearch',[StoreController::class,'search']);