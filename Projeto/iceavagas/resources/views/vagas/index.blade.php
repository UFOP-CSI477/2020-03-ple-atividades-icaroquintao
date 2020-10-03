

@extends('principal')

@section('conteudo')
    
@if(Auth::user()->admin == 1)
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
           <p> <h1><i class="fas fa-wrench"></i> Vagas</h1></p>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col">
        <p>  <a type="button" class="btn btn-primary  btn-block" href="{{route('vagas.create')}}"><i class="fas fa-arrow-left"></i> Criar</a>           </p>
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
                <th>Usuário que indicou</th>
                <th>Empresa</th>
                <th>Email da Empresa</th>
                <th>Descrição</th>
                <th>Local</th>
                <th>Data de Encerramento das Insc</th>
                <th>Area</th>
                <th>Tipo</th>
                <th>Status</th>
                <th>Link de Inscrição</th>
                <th>Detalhes</th>
                
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($vagas as $v)
                <tr>
                <td> {{$v->id}}</td>                 
                <td> {{$v->user->name}}</td>
                <td> {{$v->empresa}}</td> 
                <td> {{$v->email}}</td> 
                <td> {{$v->descricao}}</td> 
                <td> {{$v->local}}</td> 
                <td> {{$v->data}}</td> 
                <td> {{$v->area}}</td> 
                <td> {{$v->tipo}}</td>
                
                <td
                @if( $v->status == 1)
                    class="bg-warning"
                
                
                    @elseif($v->status == 2)
                    class="bg-success"
                    
                
                    
                    @endif
                
                >  @if( $v->status == 1)
                    Pendente
                
                
                    @elseif($v->status == 2)
                        Exibir
                    
                
                    @elseif($v->status == 3)
                        Encerrado
                    @endif</td>  
                <td> <a href="{{$v->link}}"> {{$v->link}} </a></td>  
       
                 
                <td><a href="{{route('vagas.show', $v->id)}}">Editar/Excluir</a></td>
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   
@endif
@endsection