@extends('principal')

@section('conteudo')

<a href="{{route('produtos.create')}}">Cadastrar novo produto</a>
    
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Tabela 01</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Unidade</th>
                <th>Detalhes</th>
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($produto as $p)
                <tr>
                <td> {{$p->id}}</td> 
                <td> {{$p->nome}}</td> 
                <td> {{$p->desc}}</td> 
                <td> {{$p->um}}</td> 
                <td><a href="{{route('produtos.show', $p->id)}}">Exibir</a></td>
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection