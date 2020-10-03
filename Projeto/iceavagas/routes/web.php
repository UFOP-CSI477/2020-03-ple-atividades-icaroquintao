<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\GeralController;
use App\Http\Controllers\UsuarioController;

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
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/', function () {
    return view('inicial');
})->name('inicial');

Route::resource('/vagas', VagaController::class)->middleware('auth');;
Route::resource('/geral', GeralController::class)->middleware('auth');;
Route::resource('/usuarios', UsuarioController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
