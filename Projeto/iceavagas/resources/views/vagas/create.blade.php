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
           <p> <h1 class="text-white"><i class="fas fa-plus-circle"></i> Cadastro de Vaga</h1></p>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-info  btn-block" href="{{ route('admin')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
        </div>

        <div class="col">
            <div class="alert alert-warning" role="alert" id="mostrar" style="display: none">
                Os campos não estão preenchidos corretamente!
              </div>
       
        </div>
        <div class="col">
             </div>
        
    </div>
 
<br>






<form method="post" action="{{ route('vagas.store')}}">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="area">Area: </label>
                
                <select name="area" id="area" class="form-control">
                    <option value="" disabled selected>Escolha uma Área</option>
                   
                    <option value="EC">Engenharia da Computação</option>
                    <option value="EE">Engenharia Elétrica</option>
                    <option value="EP">Engenharia de Produção</option>
                    <option value="SI">Sistemas de Informação</option>
                   
                    </select>
            </div>
        </div>
    
        <div class="col">
                <div class="form-group">
                <label for="user_id">Email de Usuário: </label>
                    
            <select name="user_id" id="user_id" class="form-control">
            <option value="" disabled selected>Escolha um Usuário</option>
            @foreach ($users as $u)
            <option value="{{$u->id}}">{{$u->email}}</option>
            @endforeach
            </select>
        </div>
         
       
        </div>
        <div class="col">
            <div class="form-group">
                <label for="status">Status: </label>
                <select name="status" id="status" class="form-control">
                    <option value="" disabled selected>Defina o Status</option>
                   
                    <option value="1">Pendente</option>
                    <option value="2">Exibir</option>
                    <option value="3">Encerrado</option>
                    
                   
                    </select>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="titulo">Título: </label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="empresa">Nome da Empresa: </label>
                <input type="text" name="empresa" id="empresa" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email da Empresa: </label>
                <input type="text" name="email" id="email" class="form-control">
            </div> 
        </div>
        </div>
   
    
   


    <div class="form-group">
        <label for="descricao">Descrição da Vaga: </label>
        <input type="text" name="descricao" id="descricao" class="form-control">
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="local">Local da Vaga: </label>
                <input type="text" name="local" id="local" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="data">Data Limite de Inscrições: </label>
                <input type="date" name="data" id="data" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="tipo">Tipo: </label>
                
                <select name="tipo" id="tipo" class="form-control">
                    <option value="" disabled selected>Escolha um Tipo</option>
                   
                    <option value="T">Trainee</option>
                    <option value="E">Estágio</option>
                    <option value="E/T">Estágio e Trainee</option>
                    
                   
                    </select>
            </div>
        </div>
        </div>
    
  
    



    

    <div class="form-group">
        <label for="link">Link para Inscrição: </label>
        <input type="text" name="link" id="link" class="form-control">
    </div>



    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-info">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
<br>
    

    

</form>




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