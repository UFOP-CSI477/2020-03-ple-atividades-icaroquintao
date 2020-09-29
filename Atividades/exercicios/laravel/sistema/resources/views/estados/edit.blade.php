@extends('principal')


@section('conteudo')

<form method="post" action="{{ route('estados.update', $estado->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $estado->nome}}">
    </div>

    <div class="form-group">
        <label for="sigla">Sigla: </label>
        <input type="text" name="sigla" id="sigla" class="form-control" value="{{ $estado->sigla}}">
    </div>
    

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

    

    

</form>
@endsection