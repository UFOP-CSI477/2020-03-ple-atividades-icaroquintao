<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vagas = Vaga::orderBy('id')->get();
        return view('vagas.index', ['vagas' => $vagas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('id')->get();
        return view('vagas.create', ['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vaga::create($request->all());
        session()->flash('mensagem', 'Vaga cadastrada com sucesso! Enviado para avaliação da Administração');
        return redirect()->route('vagas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function show(Vaga $vaga)
    {
        return view('vagas.show', ['vaga'=>$vaga]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaga $vaga)
    {
        $users = User::orderBy('id')->get();
        return view('vagas.edit', ['vaga'=> $vaga, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaga $vaga)
    {
        $vaga->fill($request->all());
        //dd($registro->datalimite->format('Y-m-d'));
        $vaga->save();
        
        session()->flash('mensagem', 'Vaga atualizado com sucesso!');
        return redirect()->route('vagas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaga $vaga)
    {
        $vaga->delete();
        session()->flash('mensagem', 'Vaga excluída com sucesso!');
         return redirect()->route('vagas.index');
    }
}
