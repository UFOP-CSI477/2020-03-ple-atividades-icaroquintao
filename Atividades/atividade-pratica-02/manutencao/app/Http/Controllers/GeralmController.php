<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\User;
use App\Models\Registro;
use Illuminate\Http\Request;

class GeralmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::orderBy('datalimite')->get();
        return view('geralm.index', ['registros' => $registros]);
    }


}
