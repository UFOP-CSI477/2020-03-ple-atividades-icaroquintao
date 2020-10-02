@extends('principal')

@section('conteudo')

<div class="container-fluid">
    <div class="row bg-info">

        <div class="col">
           
        </div>
        <div class="col">
           <p> <h1>Área Geral - Suporte</h1></p>
        </div>
        <div class="col">
            
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-primary  btn-block" href="{{ route('ageral')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
        </div>

        <div class="col">
           
       
        </div>
        <div class="col">
             </div>
        
    </div>
   
    <div class="row">
        <div class="col">
            <h1><i class="fas fa-list"></i>  Lista de Equipamentos</h1>
        </div>

        
       
    </div>
   

    
    </div>


<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Lista de Equipamentos em Ordem Alfabética</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
               
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($equipamentos as $e)
                <tr>
                <td> {{$e->id}}</td> 
                <td> {{$e->nome}}</td> 
                 
                
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection