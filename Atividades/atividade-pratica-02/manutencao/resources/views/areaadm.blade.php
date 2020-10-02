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

    <div class="row">

        <div class="col">
           
        </div>
        <div class="col">
           <p> <h3>Bem-vindx! {{ Auth::user()->name }}</h3></p>
        </div>
        
    </div>
<br>
<br>
<br>
    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <p>  <a type="button" class="btn btn-success btn-lg btn-block" href="{{route('equipamentos.create')}}"><i class="fas fa-hammer"></i> Cadastrar Equipamento</a></p>
       
        </div>
        <div class="col">
             </div>
        
    </div>

    <div class="row">
        <div class="col">
              </div>

        <div class="col">
            <p> <a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('equipamentos.index')}}"> <i class="fas fa-hammer"></i> Editar/Excluir Equipamento</a></p>
      
        </div>
        <div class="col">
            </div>
        
    </div>

    <div class="row">
        <div class="col">
           
        </div>

        <div class="col">
            <p> <a type="button" class="btn btn-success btn-lg btn-block" href="{{route('registros.create')}}"><i class="fas fa-wrench"></i> Cadastrar Manutenção</a></p>
        
        </div>
        <div class="col">
             </div>
       
    </div>
    <div class="row">
        <div class="col">
           
        </div>

        <div class="col">
            <p> <a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('registros.index')}}"> <i class="fas fa-wrench"></i> Editar/Excluir Manutenções</a></p>
       
        </div>
        <div class="col">
             </div>
       
    </div>

    <div class="row">

        <div class="col">
           
        </div>
        <div class="col">
           <p> <a type="button" class="btn btn-info btn-lg btn-block" href="{{route('usuarios.index')}}"><i class="fas fa-list-alt"></i> Relatório de Usuários</a></p>
        </div>
        <div class="col">
            
        </div>
    </div>

    <div class="row">

        <div class="col">
           
        </div>
        <div class="col">
           <p> <a type="button" class="btn btn-info btn-lg btn-block" href="{{route('manutencoes.index')}}"><i class="far fa-list-alt"></i> Relatório de Manutenções</a></p>
        </div>
        <div class="col">
            
        </div>
    </div>
    
    </div>

</div>






@endsection