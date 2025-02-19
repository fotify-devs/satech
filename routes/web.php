<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SieldController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [FrontController::class, 'index'])->name('home');

// Google Authentication routes
Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

// User dashboard route
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->isAdmin()) {
            return redirect()->route(config('app.admin_prefix') . '.dashboard');
        }
        return view('dashboard');
    })->name('dashboard');
});

// Admin routes
Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->prefix(config('app.admin_prefix'))
    ->name(config('app.admin_prefix') . '.')
    ->group(function () {
        Route::get('/dashboard', [SieldController::class, 'dashboard'])->name('dashboard');

        // Settings Routes
        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/', [SettingsController::class, 'index'])->name('index');
            Route::get('/general', [SettingsController::class, 'general'])->name('general');
        });
    });



    // routes/web.php (add these routes)
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/profile/create', function () {
        return view('shield.create-profile');
    })->name('profile.create');

    Route::get('/profile/{profile}/edit', function (App\Models\InstructorProfile $profile) {
        return view('shield.edit-profile', ['profile' => $profile]);
    })->name('profile.edit');
});

Route::get('/profile/{slug}', function ($slug) {
    return view('shield.show-profile', ['slug' => $slug]);
})->name('profile.show');
