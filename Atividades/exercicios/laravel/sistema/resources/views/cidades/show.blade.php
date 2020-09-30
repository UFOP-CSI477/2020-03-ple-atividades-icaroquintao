@extends('principal')


@section('conteudo')

<h1>Dados do cidade</h1>

<p>ID: {{$cidade->id}}</p>
<p>Nome: {{$cidade->nome}}</p>
<p>Sigla: {{$cidade->estado->nome}}</p>

<a href="{{route('cidades.edit', $cidade->id)}}">Editar</a>

<a href="{{route('cidades.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('cidades.destroy', $cidade->id)}}" method="post" 
    onsubmit="return confirm('Confirma a exclusão do cidade?')">

@csrf
@method('DELETE')

<input type="submit" value="Excluir">


</form>

@endsection