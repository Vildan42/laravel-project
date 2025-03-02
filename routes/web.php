<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/cars',  [CarController::class, 'index'])->name('cars.index');
Route::get('/admin/cars/create', [CarController::class, 'create'])->name('cars.create');

Route::post('/admin/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/admin/cars/{car}', [CarController::class, 'show'])->name('cars.show');

Route::get('/admin/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::patch('/admin/cars/{car}', [CarController::class, 'update'])->name('cars.update');

Route::delete('/admin/cars/{car}',  [CarController::class, 'delete'])->name('cars.delete');

Route::get('/admin',  'App\Http\Controllers\MainController@index')->name('main.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
