<?php

use Illuminate\Support\Facades\Route;
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

use App\Models\Estado;
use App\Models\Produto;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CidadeController;


Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/estados', EstadoController::class)->middleware('auth');
Route::resource('/produtos', ProdutoController::class)->middleware('auth');
Route::resource('/cidades', CidadeController::class)->middleware('auth');
 /*        

        Route::get('/ola', function () {
            return 'Olá, mundo!';
        });

        Route::get('/estados/todos', function () {

            $estados = Estado::all();
            return view('lista', ['dados'=>$estados]);

        });

        Route::get('/produtos/todos', function () {

            $prod = Produto::all();
            return view('lista2', ['dados'=>$prod]);

        });

        Route::get('/produtos/{id}', function ($id) {
            
            $produto = Produto::findOrFail($id);
            if($produto == null){
                return 'ID inválido';
            }
            return view('lista2', ['dados'=>$produto]);
        });

        Route::get('/estados/{id}', function ($id) {
            
            $estado = Estado::findOrFail($id);
            if($estado == null){
                return 'ID inválido';
            }
            
            return view('lista', ['dados'=>$estado]);
        }); */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
