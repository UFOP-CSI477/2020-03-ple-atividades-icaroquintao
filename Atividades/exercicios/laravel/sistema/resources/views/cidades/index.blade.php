@extends('principal')

@section('conteudo')
    

<a href="{{route('cidades.create')}}">Cadastrar novo cidade</a>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Tabela 01</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Detalhes</th>
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($cidades as $e)
                <tr>
                <td> {{$e->id}}</td> 
                <td> {{$e->nome}}</td> 
                <td> {{$e->estado->nome}}-{{$e->estado->sigla}}</td> 
                <td><a href="{{route('cidades.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection