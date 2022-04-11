<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('LikePublication', [PublicationsController::class, 'like'])->name('likePublication');
Route::get('getTotalLikesPublication', [PublicationsController::class, 'getTotalLikesPublication'])->name('getTotalLikesPublication');
Route::get('addComment', [PublicationsController::class, 'addComment'])->name('addComment');
Route::post('followUser', [ProfileController::class, 'followUser'])->name('followUser');