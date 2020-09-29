@extends('principal')


@section('conteudo')

<form method="post" action="{{ route('estados.store')}}">
    @csrf
    <div class="form-group">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div class="form-group">
        <label for="sigla">Sigla: </label>
        <input type="text" name="sigla" id="sigla" class="form-control">
    </div>
    

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

    

    

</form>
@endsection