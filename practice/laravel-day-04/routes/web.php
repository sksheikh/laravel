<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/full-name',[HomeController::class,'fullName'])->name('full-name');
Route::post('/save-full-name',[HomeController::class,'saveFullName'])->name('save-full-name');
