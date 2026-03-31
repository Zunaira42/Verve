<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
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
Route::post('/', [ContactController::class, 'store'])->name('contact.store');
