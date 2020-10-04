

@extends('principal')

@section('conteudo')
    

<div class="container-fluid">
    <div class="row bg-warning">

        <div class="col">
           
        </div>
        <div class="col">
           <p> <h1><i class="fas fa-toolbox"></i> Área Administrativa</h1></p>
        </div>
        <div class="col">
            
        </div>
    </div>
    <div class="row bg-info">

        
        <div class="col">
           <p> <h1><i class="fas fa-wrench"></i> Manutenções</h1></p>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-primary  btn-block" href="{{ route('areaadm')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
        </div>

        <div class="col">
           
       
        </div>
        <div class="col">
             </div>
        
    </div>
 
<br>






</div>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Lista de Manutenções</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Descrição</th>
                <th>Data Limite</th>
                <th>Tipo</th>
                <th>Editar ou Excluir</th>
                
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($registros as $r)
                <tr>
                <td> {{$r->id}}</td>                 
                <td> {{$r->equipamento->nome}}</td>
                <td> {{$r->user->name}} - ({{$r->user->email}})</td> 
                <td> {{$r->descricao}}</td> 
                <td>  <input class="" type="date" value="{{$r->datalimite}}" disabled></td> 
                <td>  @if( $r->tipo == 1)
                    Preventiva
                
                
                    @elseif($r->tipo == 2)
                        Corretiva
                    
                
                    @elseif($r->tipo == 3)
                        Urgente
                    @endif</td> 
                 
                <td><a class="btn btn-primary" href="{{route('registros.show', $r->id)}}">Editar/Excluir</a></td>
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection