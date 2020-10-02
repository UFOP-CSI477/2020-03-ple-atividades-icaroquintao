

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
           <p> <h1><i class="far fa-list-alt"></i> Relatório de Manutenção</h1></p>
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


@foreach ($equipamentos as $e)

<h1>{{$e->nome}}</h1>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

       

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Descrição</th>
                <th>Data Limite</th>
                <th>Tipo</th>
               
                
               
            </tr>
        </thead>

        <tbody>
            @php $aux = 0
            @endphp
            @foreach ($registros as $r)
                @if($e->id == $r->equipamento_id)  
                <tr>
                    @php  $aux = $aux + 1 @endphp
                <td> {{$r->id}}</td>                 
                <td> {{$r->equipamento->nome}}</td>
                <td> {{$r->user->name}} - ({{$r->user->email}})</td> 
                <td> {{$r->descricao}}</td> 
                <td> {{$r->datalimite}}</td> 
                <td>  @if( $r->tipo == 1)
                    Preventiva
                
                
                    @elseif($r->tipo == 2)
                        Corretiva
                    
                
                    @elseif($r->tipo == 3)
                        Urgente
                    @endif</td> 
                
                
                </tr>
                @endif
            @endforeach
         
        </tbody>
        <tfoot>
            
            <h5>Quantidade de Registros: {{$aux}}</h5>    
        </tfoot>

       

    </table>
</div>



@endforeach 

@endsection