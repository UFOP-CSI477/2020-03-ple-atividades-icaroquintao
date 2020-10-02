<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\GeralController;
use App\Http\Controllers\GeralmController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ManutencaoController;
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
    return view('inicial');
})->name('inicial');

Route::get('/ageral', function () {
    return view('ageral');
})->name('ageral');

Route::get('/areaadm', function () {
    return view('areaadm');
})->name('areaadm')->middleware('auth');


Route::resource('/manutencao/listar', GeralmController::class);
Route::resource('/equipamento/listar', GeralController::class);
Route::resource('/equipamentos', EquipamentoController::class)->middleware('auth');
Route::resource('/registros', RegistroController::class)->middleware('auth');
Route::resource('/usuarios', UsuarioController::class)->middleware('auth');
Route::resource('/manutencoes', ManutencaoController::class)->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
