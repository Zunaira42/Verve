<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\TrainerController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class)->middleware(['auth']);
    Route::resource('contacts', ContactController::class);
    Route::resource('trainers', TrainerController::class);
});
require __DIR__ . '/auth.php';
