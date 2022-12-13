<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseCategoryController;


Route::as('front.')->group(function (){
    Route::get('/',[FrontController::class,'home'])->name('home');
    Route::get('/about-us',[FrontController::class,'aboutUs'])->name('about');
    Route::get('/contact-us',[FrontController::class,'contactUs'])->name('contact');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'] )->name('dashboard');

//    Category routes
    Route::resource('course-categories',CourseCategoryController::class);
});
