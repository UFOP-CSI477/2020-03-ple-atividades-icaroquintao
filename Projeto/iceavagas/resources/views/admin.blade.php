@extends('principal')
@section('conteudo')
@if(Auth::user()->admin == 1)

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">{{ __('Painel do Administrador') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div class="container-fluid">
                        <div class="row bg-warning">
                    
                            <div class="col-3">
                               
                            </div>
                            <div class="col">
                               <p> <h3><i class="fas fa-user-lock"></i> Área Administrativa</h3></p>
                            </div>
                           
                        </div>
                    
                        <div class="row">
                    
                           
                            <div class="col">
                               <p> <h3>Bem-vindx de volta, {{ Auth::user()->name }}</h3></p>
                            </div>
                            
                        </div>

                        <div class="row">
                        
                            <div class="col">
                            <p>  <a type="button" class="btn btn-info btn-lg btn-block" href="{{route('vagas.create')}}"><i class="fas fa-plus-circle"></i> Cadastrar nova Vaga</a></p>
                           
                            </div>
                           
                            
                        </div>
                    
                        <div class="row">
                            
                    
                            <div class="col">
                                <p> <a type="button" class="btn btn-info btn-lg btn-block" href="{{route('vagas.index')}}"><i class="fas fa-users-cog"></i>  Relatório e Gerenciamento de Vagas</a></p>
                          
                            </div>
                            
                            
                        </div>
                    
                                  
                        <div class="row">
                    
                           
                            <div class="col">
                               <p> <a type="button" class="btn btn-info btn-lg btn-block" href="{{route('usuarios.index')}}"><i class="far fa-list-alt"></i> Relatório de Usuários</a></p>
                            </div>
                           
                        </div>
                   
                        
                        </div>
                    
                    </div>
                    
                </div>
            </div>
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