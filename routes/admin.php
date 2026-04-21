<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\TrainerController;
use Illuminate\Support\Facades\Route;

  
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class)->middleware(['auth']);
    Route::resource('contacts', ContactController::class);
    Route::resource('trainers', TrainerController::class);
});
require __DIR__ . '/auth.php';
