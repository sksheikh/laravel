<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/product-details/{id}',[HomeController::class,'ProductDetails'])->name('product-details');

