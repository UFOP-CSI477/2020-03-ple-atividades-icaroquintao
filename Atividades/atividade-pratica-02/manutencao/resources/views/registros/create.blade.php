@extends('principal')


@section('conteudo')

<form method="post" action="{{ route('registros.store')}}">
    @csrf


    <div class="form-group">
        <label for="user_id">Email de Usuário: </label>
            
    <select name="user_id" id="user_id" class="form-control">
    @foreach ($users as $u)
    <option value="{{$u->id}}">{{$u->email}}</option>
    @endforeach
    </select>
</div>


    <div class="form-group">
        <label for="equipamento_id">Equipamento: </label>
        
        <select name="equipamento_id" id="equipamento_id" class="form-control">
            @foreach ($equipamentos as $e)
            <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
            </select>
    </div>



    <div class="form-group">
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao" class="form-control">
    </div>
    <div class="form-group">
        <label for="datalimite">Data Limite: </label>
        <input type="date" name="datalimite" id="datalimite" class="form-control">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo: </label>
        <input type="number" name="tipo" id="tipo" class="form-control">
    </div>


    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

    

    

</form>
@endsection