<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationsController;


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/', HomeController::class);
    Route::resource('/publications', PublicationsController::class);
    Route::resource('/profile', ProfileController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('user-search', [HomeController::class, 'search'])->name('user-search');
});