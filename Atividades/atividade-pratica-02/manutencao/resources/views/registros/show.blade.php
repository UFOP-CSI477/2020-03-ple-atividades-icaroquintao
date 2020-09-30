@extends('principal')


@section('conteudo')

<h1>Dados do registro</h1>

<p>ID: {{$registro->id}}</p>
<p>Equipamento: {{$registro->equipamento->nome}}</p>
<p>Usuário: {{$registro->user->name}}</p>
<p>Email: {{$registro->user->email}}</p>
<p>Descrição: {{$registro->descricao}}</p>
<p>Data Limite: {{$registro->datalimite}}</p>
<p>Tipo: {{$registro->tipo}}</p>




<a href="{{route('registros.edit', $registro->id)}}">Editar</a>

<a href="{{route('registros.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('registros.destroy', $registro->id)}}" method="post" 
    onsubmit="return confirm('Confirma a exclusão do registro?')">

@csrf
@method('DELETE')

<input type="submit" value="Excluir">


</form>

@endsection