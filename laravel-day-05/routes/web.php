<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/add-product', [ProductController::class,'addProduct'])->name('add-product');
Route::post('/save-product', [ProductController::class,'saveProduct'])->name('save-product');
