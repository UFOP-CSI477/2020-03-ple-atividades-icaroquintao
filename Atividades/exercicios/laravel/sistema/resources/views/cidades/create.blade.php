@extends('principal')


@section('conteudo')

<form method="post" action="{{ route('cidades.store')}}">
    @csrf
    <div class="form-group">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div class="form-group">
        <label for="estado_id">Estado: </label>
        <select name="estado_id" id="estado_id" class="form-control">

            @foreach ($estados as $e)
            <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach


        </select>
    </div>
    

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

    

    

</form>
@endsection