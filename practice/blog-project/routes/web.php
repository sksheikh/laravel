<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

Route::get('/',[FrontController::class,'home'])->name('home');
Route::get('/details',[FrontController::class,'productDetails'])->name('product-details');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/add-category', [CategoryController::class,'addCategory'])->name('add-category');
    Route::post('/create-category', [CategoryController::class,'createCategory'])->name('create-category');
});
