<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\User;
use App\Models\Registro;


class ManutencaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        $users = User::orderBy('id')->get();
        $registros = Registro::orderBy('datalimite')->get();
        return view('manutencoes.index', ['registros' => $registros, 'equipamentos'=>$equipamentos, 'users'=>$users]);
    }

    
}
