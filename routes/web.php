<?php

use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('/panel')/**->middleware('auth')**/ ->group(function () {
    Route::get('/', [PanelController::class, 'home'])->name('panel');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/auth')->middleware(['auth'])->group(function () {
    Route::get('/facebook', [SocialController::class, 'redirectToFacebook'])->name('auth.facebook');
    Route::get('/instagram', [SocialController::class, 'redirectToInstagram'])->name('auth.instagram');
    Route::get('/facebook/callback', [SocialController::class, 'handleFacebookCallback'])->name('auth.facebook.callback');
    Route::get('/instagram/callback', [SocialController::class, 'handleInstagramCallback'])->name('auth.instagram.callback');
});


require __DIR__.'/auth.php';
