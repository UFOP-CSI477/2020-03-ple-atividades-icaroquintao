@extends('principal')


@section('conteudo')




<div class="container-fluid">
    <div class="row bg-warning">

        <div class="col">
           
        </div>
        <div class="col">
           <p> <h1 class="text-white"><i class="fas fa-user-tie"></i> Enviar uma Vaga</h1></p>
        </div>
        <div class="col">
            
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            
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






<form method="post" action="{{ route('geral.store')}}">
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
                
                <input type="text"  class="form-control" value="{{Auth::user()->email }}" disabled>
            </select>
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
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="link">Link para Inscrição (https://SEU_LINK): </label>
            <input type="text" name="link" id="link" class="form-control">
        </div>
    
</div>
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
</div>

<div class="form-group">
    <label for="descricao">Descrição da Vaga: </label>
    <input type="text" name="descricao" id="descricao" class="form-control">
</div>




    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-info">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

    

    

</form>




</div>
@endsection