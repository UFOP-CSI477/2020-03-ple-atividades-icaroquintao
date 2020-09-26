@extends('principal')

@section('conteudo')
    
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Tabela 01</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Sigla</th>
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($estados as $e)
                <tr>
                <td> {{$e->id}}</td> 
                <td> {{$e->nome}}</td> 
                <td> {{$e->sigla}}</td> 
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection