<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\MontadoraController;
use Illuminate\Support\Facades\Auth;

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
})->middleware(['auth']);


Route::get('/carro', [CarroController::class, 'index']);
Route::resource('/carro', CarroController::class)->middleware(['auth']);

Route::get('/montadora', [MontadoraController::class, 'index']);
Route::resource('/montadora', MontadoraController::class)->middleware(['auth']);

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');