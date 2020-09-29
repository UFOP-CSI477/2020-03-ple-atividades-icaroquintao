@extends('principal')


@section('conteudo')

<h1>Dados do Produto</h1>

<p>ID: {{$produto->id}}</p>
<p>Nome: {{$produto->nome}}</p>
<p>Descrição: {{$produto->desc}}</p>
<p>Unidade: {{$produto->um}}</p>

<a href="{{route('produtos.edit', $produto->id)}}">Editar</a>

<a href="{{route('produtos.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('produtos.destroy', $produto->id)}}" method="post" 
    onsubmit="return confirm('Confirma a exclusão do produto?')">

@csrf
@method('DELETE')

<input type="submit" value="Excluir">


</form>

@endsection