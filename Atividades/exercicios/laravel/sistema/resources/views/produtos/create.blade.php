@extends('principal')


@section('conteudo')

<form method="post" action="{{ route('produtos.store')}}">
    @csrf
    <div class="form-group">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div class="form-group">
        <label for="desc">Descrição: </label>
        <input type="text" name="desc" id="desc" class="form-control">
    </div>
    <div class="form-group">
        <label for="um">Unidade: </label>
        <input type="text" name="um" id="um" class="form-control">
    </div>
    
    

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

    

    

</form>
@endsection