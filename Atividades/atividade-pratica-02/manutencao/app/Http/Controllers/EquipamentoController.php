<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;
use App\Models\Registro;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        return view('equipamentos.index', ['equipamentos' => $equipamentos]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        return view('equipamentos.lista', ['equipamentos' => $equipamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
      
        Equipamento::create($request->all());
        session()->flash('mensagem', 'Equipamento cadastrado com sucesso!');
        return redirect()->route('areaadm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        return view('equipamentos.show', ['equipamento'=>$equipamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
        return view('equipamentos.edit', ['equipamento'=> $equipamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        //dd($request->all());
        $equipamento->fill($request->all());
        $equipamento->save();
        
        session()->flash('mensagem', 'Equipamento atualizado com sucesso!');
        return redirect()->route('equipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
       
        //Validação
        $registros = Registro::orderBy('id')->where('equipamento_id', $equipamento->id)->get();
        //dd($registros);
            if($registros->count() > 0){
                session()->flash('mensagem2', 'Equipamento não pode ser excluido! Ele está cadastrado em alguma manutenção!');
                
            }else{
        
            $equipamento->delete();
            session()->flash('mensagem', 'Equipamento excluído com sucesso!');
            
            }
            return redirect()->route('equipamentos.index');  
    }
}
