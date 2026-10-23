<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/kontak', [HomeController::class, 'kontak']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard');
});
Route::middleware(['auth'])->group(function () {
    Route::resource('books', BookController::class);
});
Route::get('/profile', [BookController::class, 'index'])->name('profile.edit');

require __DIR__.'/auth.php';
