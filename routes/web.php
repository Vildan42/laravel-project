<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/', [ \App\Http\Web\Home\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [\App\Http\Web\Home\Controllers\HomeController::class, 'show'])->name('show');
