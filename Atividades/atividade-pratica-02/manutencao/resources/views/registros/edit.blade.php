@extends('principal')


@section('conteudo')

<form method="post" action="{{ route('registros.update', $registro->id)}}">
    @csrf
    @method('PUT')


    <div class="form-group">
        <label for="user_id">Usuário: </label>
        <select name="user_id" id="user_id" class="form-control">

            @foreach ($users as $u)
            <option value="{{$u->id}}"
                
            @if($registro->user_id == $u->id) 
                selected
            @endif
                
                
                
            >{{$u->email}}</option>
            @endforeach


        </select>    
    
    
    </div>

    <div class="form-group">
        <label for="equipamento_id">Equipamento: </label>
       
        <select name="equipamento_id" id="equipamento_id" class="form-control">

            @foreach ($equipamentos as $e)
            <option value="{{$e->id}}"
                
            @if($registro->equipamento_id == $e->id) 
                selected
            @endif
                
                
                
            >{{$e->nome}}</option>
            @endforeach


        </select>    
    </div>



    <div class="form-group">
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="{{$registro->descricao}}">
    </div>
    <div class="form-group">
        <label for="datalimite">Data Limite: </label>
        <input type="text" name="datalimite" id="datalimite" class="form-control" value=" {{$registro->datalimite}}">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo: </label>
        <input type="number" name="tipo" id="tipo" class="form-control" value="{{$registro->tipo}}">
    </div>

    

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

    

    

</form>
@endsection