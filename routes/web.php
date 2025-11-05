<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\post;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/accounts/{user}', [AccountController::class, 'index'])->name('accounts.index');
    Route::post('/accounts/store', [AccountController::class, 'store'])->name('accounts.store');
    Route::put('/accounts/update/{account}', [AccountController::class, 'update'])->name('accounts.update');
    Route::get('/accounts/destroy/{account}', [AccountController::class, 'destroy'])->name('accounts.destroy');

    Route::get('/categories/{user}', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/update/{account}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/categories/destroy/{account}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

require __DIR__.'/auth.php';
