<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationsController;


Route::resource('/', HomeController::class);
Route::resource('/publications', PublicationsController::class);
Route::resource('/profile', ProfileController::class);