<?php

namespace App\Http\Controllers;


use App\Models\User;



class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::orderBy('name')->get();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }



 
}
