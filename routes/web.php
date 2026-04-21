<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpKernel\HttpCache\Store;

// Route::get('/', function () {
//     return view('welcome');
// });
// route::get('/mail', [MailController::class, 'sendmail']);

Route::get('/', function () {
    return view('app.index');
})->name('/');

Route::get('program', function () {
    return view('app.program');
})->name('program');

Route::get('gallary', function () {
    return view('app.gallary');
});

Route::get('trainers', function () {
    return view('app.trainer');
});
Route::post('/', [ContactController::class, 'store'])->name('contact.store');

require __DIR__ . '/auth.php';
