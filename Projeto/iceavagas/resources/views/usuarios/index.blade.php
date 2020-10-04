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
           <p> <h1 class="text-white"><i class="fas fa-users"></i> Relatório de Usuários</h1></p>
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
 
<br>






</div>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Lista de Usuários do Sistema</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>Matrícula</th>
                <th>Área de Interesse</th>
                <th>Email</th>
                <th>Permissão</th>
                
           
                
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($usuarios as $u)
                <tr>
                <td> {{$u->id}}</td>                 
                <td> {{$u->name}}</td>
                <td> {{$u->curso}}</td>
                <td> {{$u->matricula}}</td>
                <td> 
                    @if($u->area == '0')
                    Administrador
                    @elseif($u->area == 'T')
                    Trainee
                    @elseif($u->area == 'E')
                    Estágio
                    @elseif($u->area == 'E/T')
                    Trainee e Estágio
                    @endif
                
                </td>
                <td> {{$u->email}}</td> 
                <td
                @if($u->admin == 1)
                class="bg-info text-white"
                
                @endif
                >
                @if($u->admin == 1)
                Administrador
                @elseif($u->admin == 0)
                Usuário
                @endif
                
                </td> 
             
                 
         
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