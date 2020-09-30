@extends('principal')

@section('conteudo')
    

<a href="{{route('equipamentos.create')}}">Cadastrar novo equipamento</a>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Tabela 01</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Detalhes</th>
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($equipamentos as $e)
                <tr>
                <td> {{$e->id}}</td> 
                <td> {{$e->nome}}</td> 
                 
                <td><a href="{{route('equipamentos.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection