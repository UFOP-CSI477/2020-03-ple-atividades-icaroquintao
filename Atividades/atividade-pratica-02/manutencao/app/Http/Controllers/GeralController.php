<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;


class GeralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        return view('geral.index', ['equipamentos' => $equipamentos]);
    }





}
