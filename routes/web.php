<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars',[CarsController::class, 'index'])->name('cars');
Route::post('/cars',[CarsController::class, 'store'])->name('cars');

Route::get('/cars/{id}',[CarsController::class, 'show'])->name('cars-edit');
Route::patch('/cars/{id}', [CarsController::class, 'update'])->name('cars-update');

Route::delete('/cars/{id}',[CarsController::class, 'destroy'])->name('cars-destroy');