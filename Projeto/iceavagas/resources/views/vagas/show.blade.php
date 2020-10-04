@extends('principal')


@section('conteudo')
@if(Auth::user()->admin == 1)

<div class="container-fluid">
    <div class="row bg-warning">

        <div class="col-4">
           
        </div>
        <div class="col">
           <p> <h1><i class="fas fa-user-lock"></i> Área Administrativa</h1></p>
        </div>
       
    </div>
    <div class="row bg-info">

        
        <div class="col">
        <p> <h1 class="text-white"><i class="fas fa-users-cog"></i> Gerenciar Vaga #{{$vaga->id}}</h1></p>
        </div>
        
    </div>
    <br>

    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-info  btn-block" href="{{ route('vagas.index')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
        </div>

      
        <div class="col">
            <p><a href="{{route('vagas.edit', $vaga->id)}}" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> Editar</a>  </p>
       
        </div>
        <div class="col">
            <form name="frmDelete" action="{{route('vagas.destroy', $vaga->id)}}" method="post" 
                onsubmit="return confirm('Confirma a exclusão da vaga?')">
            
            @csrf
            @method('DELETE')
            
            <button type="submit"  class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> Excluir</button>
            
            
            </form>
        </div>
        
    </div>

 







</div>

<div class="container-fluid">




    <div class="row">
    
        <div class="col">
            <p> 
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                
                        
                
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
                               
                                
                               
                            </tr>
                        </thead>
                
                        <tbody>
                            <tr>
                                <td> {{$vaga->id}}</td>                 
                                <td> {{$vaga->user->name}}</td>
                                <td> {{$vaga->empresa}}</td> 
                                <td> {{$vaga->email}}</td> 
                                <td> {{$vaga->descricao}}</td> 
                                <td> {{$vaga->local}}</td> 
                                <td> <input class="" type="date" value="{{$vaga->data}}" disabled></td> 
                                <td> {{$vaga->area}}</td> 
                                <td> {{$vaga->tipo}}</td>
                                
                                <td
                                @if( $vaga->status == 1)
                                    class="bg-warning"
                                
                                
                                    @elseif($vaga->status == 2)
                                    class="bg-success"
                                    
                                
                                    
                                    @endif
                                
                                >  @if( $vaga->status == 1)
                                    Pendente
                                
                                
                                    @elseif($vaga->status == 2)
                                        Exibir
                                    
                                
                                    @elseif($vaga->status == 3)
                                        Encerrado
                                    @endif</td>  
                                <td> <a href="{{$vaga->link}}" target="_blank"> {{$vaga->link}} </a></td>
                        </tbody>
                
                       
                
                    </table>
                </div>

            </p>
       
        </div>
        
        
    </div>

    <div class="row">
        <div class="col">
            </div>

        
    </div>




    
</div>








@else
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-danger text-white">{{ __('Atenção! Você não tem permissão para acessar essa página!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Efetue login como administrador
                    <br>
                    <br>
                    <a class="btn btn-danger" href="{{route('inicial')}}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection