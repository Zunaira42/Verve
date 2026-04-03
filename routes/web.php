<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\HttpCache\Store;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('app.index');
})->name('/');

Route::get('program', function () {
    return view('app.program');
})->name('program');

Route::get('gallary', function () {
    return view('app.gallary');
});

Route::get('tainers', function () {
    return view('app.trainer');
});
Route::post('/', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
