

@extends('principal')

@section('conteudo')
    

<a href="{{route('registros.create')}}">Cadastrar novo registro</a>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Tabela 01</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Descrição</th>
                <th>Data Limite</th>
                <th>Tipo</th>
                <th>Detalhes</th>
                
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($registros as $r)
                <tr>
                <td> {{$r->id}}</td>                 
                <td> {{$r->equipamento->nome}}</td>
                <td> {{$r->user->name}} - ({{$r->user->email}})</td> 
                <td> {{$r->descricao}}</td> 
                <td> {{$r->datalimite}}</td> 
                <td> {{$r->tipo}}</td> 
                 
                <td><a href="{{route('registros.show', $r->id)}}">Exibir</a></td>
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection