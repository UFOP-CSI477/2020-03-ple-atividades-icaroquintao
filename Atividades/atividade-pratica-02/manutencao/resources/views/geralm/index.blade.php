

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
            <h1><i class="fas fa-clipboard-list"></i> Lista de Manutenções Cadastradas para os Equipamentos</h1>
        </div>

        
       
    </div>
   

    
    </div>




<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Lista de Manutenções</caption>

        <thead>

            <tr class="thead-dark">
                <th>Data Limite</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Tipo</th>
                <th>Descrição</th>
                
                
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($registros as $r)
                <tr>
                <td> <input class="" type="date" value="{{$r->datalimite}}" disabled></td>
                <td> {{$r->equipamento->nome}}</td>
                <td> {{$r->user->name}}</td>
                <td> 
                    @if( $r->tipo == 1)
                    Preventiva
                
                
                    @elseif($r->tipo == 2)
                        Corretiva
                    
                
                    @elseif($r->tipo == 3)
                        Urgente
                    @endif
                </td> 
                <td> {{$r->descricao}}</td> 
                 
                
                 
               
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection