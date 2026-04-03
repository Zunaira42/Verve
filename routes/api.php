<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/array', function () {
    return ["name" => "zunaira", "f-name" => "mushtaq"];
});