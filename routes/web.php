<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\PublicRecommendationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Public Routes & Admin Routes for SOLECRAFT (Shoe Care Solutions).
|
*/

// Public Recommendation System
Route::get('/', [PublicRecommendationController::class, 'index'])->name('home');
Route::get('/rekomendasi', [PublicRecommendationController::class, 'index'])->name('recommendation.index');
Route::post('/rekomendasi', [PublicRecommendationController::class, 'recommend'])
    ->middleware('throttle:60,1')
    ->name('recommendation.process');

// Admin Authentication
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('login.attempt');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Protected Admin Management
    Route::middleware('auth')->name('admin.')->group(function () {
        Route::resource('services', AdminServiceController::class);
    });
});
