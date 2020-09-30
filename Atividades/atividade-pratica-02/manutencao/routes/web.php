<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;

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

Route::get('/p', function () {
    return view('principal');
})->name('principal');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/geral', function () {
    return view('geral');
})->name('geral');


Route::resource('/equipamentos', EquipamentoController::class);
Route::resource('/registros', RegistroController::class);

