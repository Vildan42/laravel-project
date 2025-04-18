<?php

use App\Http\Admin\Controllers\CarController;
use App\Http\Admin\Controllers\ImageController;
use App\Http\Admin\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('admin.index');

Route::resource('cars', CarController::class);
Route::resource('main', MainController::class);

Route::post('/image/upload-image', [ImageController::class, 'upload'])->name('image.upload');

Route::middleware('cars')->get('/index', function (Request $request) {
    return $request->user();
});