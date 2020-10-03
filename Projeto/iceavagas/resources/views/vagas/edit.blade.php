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
        <p> <h1 class="text-white"><i class="fas fa-edit"></i> Editar Vaga #{{$vaga->id}}</h1></p>
        </div>
        
    </div>
    <br>

    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-info  btn-block" href="{{route('vagas.show', $vaga->id)}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
        </div>

      
        <div class="col">
            
        </div>
        <div class="col">
           
        </div>
        
    </div>
 
<br>

</div>

<div class="container-fluid">

    <form method="post" action="{{ route('vagas.update', $vaga->id)}}">
        @csrf
        @method('PUT')
    

    <div class="row">
        <div class="col">
        <p>
            <div class="form-group">
                <label for="user_id">Usuário: </label>
                <select name="user_id" id="user_id" class="form-control">
        
                    @foreach ($users as $u)
                    <option value="{{$u->id}}"
                        
                    @if($vaga->user_id == $u->id) 
                        selected
                    @endif
                        
                        
                        
                    >{{$u->email}}</option>
                    @endforeach
        
        
                </select>    
            
            
            </div></p>
        </div>

        <div class="col">
            
       <P>
        <div class="form-group">
            <label for="status">Status: </label>
            <select name="status" id="status" class="form-control">
                <option value="" disabled selected>Defina o Status</option>
               
                <option value="1"
                @if($vaga->status == '1')
                selected
                @endif
                >Pendente</option>
                <option value="2" @if($vaga->status == '2')
                    selected
                    @endif>Exibir</option>
                <option value="3" @if($vaga->status == '3')
                    selected
                    @endif>Encerrado</option>
                
               
                </select>
        </div> 
       </P>
        </div>
        
    </div>

    

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="{{$vaga->descricao}}">
            </div>
        </div>

       
    </div>

    <div class="row">
        <div class="col">
        <div class="form-group">
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{$vaga->titulo}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="empresa">Nome da Empresa: </label>
            <input type="text" name="empresa" id="empresa" class="form-control" value="{{$vaga->empresa}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="email">Email da Empresa: </label>
            <input type="text" name="email" id="email" class="form-control" value="{{$vaga->email}}">
        </div>
    </div>  
    </div>  
   
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="link">Link para Inscrição: </label>
                <input type="text" name="link" id="link" class="form-control" value="{{$vaga->link}}">
            </div>
        </div>
        <div class="col">

            <label for="area">Area: </label>
                
            <select name="area" id="area" class="form-control">
                
               
                <option value="EC"
                @if($vaga->area == 'EC')
                selected
                @endif
                >Engenharia da Computação</option>
                <option value="EE"
                @if($vaga->area == 'EE')
                selected
                @endif
                >Engenharia Elétrica</option>
                <option value="EP"
                @if($vaga->area == 'EP')
                selected
                @endif>Engenharia de Produção</option>
                <option value="SI"
                @if($vaga->area == 'SI')
                selected
                @endif
                >Sistemas de Informação</option>
               
                </select>
       
        </div>
       
    </div>

    <div class="row">
        <div class="col">
        <p>
            <div class="form-group">
                <label for="datalimite">Data Limite: </label>
                <input type="date" name="data" id="data" class="form-control" value="{{$vaga->data}}">
            </div></p>
        </div>
        <div class="col">
        <p>
        <div class="form-group">
            <label for="local">Local da Vaga: </label>
            <input type="text" name="local" id="local" class="form-control" value="{{$vaga->local}}">
        </div>
    </p>
</div>
        <div class="col">
            <p> 
                <div class="form-group">
                    <label for="tipo">Tipo: </label>
                   
                    <select name="tipo" id="tipo" class="form-control">
        
                        
                        <option value="T"
                        @if($vaga->tipo == 'T')
                        selected
                        @endif
                        >Trainee</option>

                        <option value="E"
                        @if($vaga->tipo == 'E')
                        selected
                        @endif
                        >Estágio</option>

                        <option value="E/T"
                        @if($vaga->tipo == 'E/T')
                        selected
                        @endif
                        >Estágio e Trainee</option>
                     
            
                    </select>    
                


                </div>
            </p>
       
        </div>
       
    </div>

    <div class="row">
    <div class="col">

    </div>
        <div class="col">
            <p>     <div class="text-right">
                <input type="submit" value="Atualizar" class="btn btn-info btn-lg">
                <input type="reset" value="Voltar Valores" class="btn btn-warning btn-lg text-white">
            </div>

        </form></p>
       
        </div>
         <div class="col-5">
        
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