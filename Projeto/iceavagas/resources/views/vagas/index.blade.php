

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
           <p> <h1 class="text-white"><i class="fas fa-users-cog"></i> Relatório e Gerenciamento de Vagas</h1></p>
        </div>
        
    </div>
    <br>

    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-info  btn-block" href="{{ route('admin')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
        </div>

        <div class="col">
         
       
        </div>
        <div class="col">
             </div>
        
    </div>

</div>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Relatório de Vagas</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Usuário que indicou</th>
                <th>Empresa</th>
            <!--    <th>Email da Empresa</th> -->
                <th>Descrição</th>
                <th>Local</th>
                <th>Data de Encerramento das Insc</th>
                <th>Area</th>
                <th>Tipo</th>
                <th>Status</th>
                <th>Link de Inscrição</th>
                <th>Gerenciar</th>
                
               
            </tr>
        

      </thead>

        <tbody>
          
            @foreach ($vagas as $v)
                <tr>
                <td> {{$v->id}}</td>                 
                <td> {{$v->user->name}}</td>
                <td> {{$v->empresa}}</td> 
                <!--<td> {{$v->email}}</td> -->
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
                    
                    @elseif($v->status == 3)
                    class="bg-danger"
                    
                    @endif
                
                >  @if( $v->status == 1)
                    Pendente
                
                
                    @elseif($v->status == 2)
                        Exibir
                    
                
                    @elseif($v->status == 3)
                        Encerrado
                    @endif</td>  
                <td> <a href="{{$v->link}}" target="_blank"> {{$v->link}} </a></td>  
       
                 
                <td><a href="{{route('vagas.show', $v->id)}}" class="btn btn-info">Editar/Excluir</a></td>
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
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