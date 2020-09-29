@extends('principal')

@section('conteudo')
    

<a href="{{route('estados.create')}}">Cadastrar novo estado</a>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Tabela 01</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Detalhes</th>
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($estados as $e)
                <tr>
                <td> {{$e->id}}</td> 
                <td> {{$e->nome}}</td> 
                <td> {{$e->sigla}}</td> 
                <td><a href="{{route('estados.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection