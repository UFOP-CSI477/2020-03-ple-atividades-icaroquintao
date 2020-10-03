<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vagas = Vaga::orderBy('id')->get();
        return view('geral.index', ['vagas' => $vagas]);
    }
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('id')->get();
        return view('geral.create', ['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #$request->parameters->status = 1;
        #$request->parameters->user_id = Auth::user()->id;
        $request->merge([
            'user_id' => Auth::user()->id,
            'status' => 1,
        ]);
        #https://stackoverflow.com/questions/36812476/how-to-change-value-of-a-request-parameter-in-laravel
        #dd($request);
        Vaga::create($request->all());
        session()->flash('mensagem', 'Vaga cadastrada com sucesso! Enviado para avaliação da Administração');
        return redirect()->route('geral.create');
    }

}
