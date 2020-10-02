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
           <p> <h1><i class="fas fa-wrench"></i> Cadastro de Manutenções</h1></p>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-primary  btn-block" href="{{ route('areaadm')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
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






<form method="post" action="{{ route('registros.store')}}">
    @csrf
    <div class="row">
        <div class="col">
            <p>     <div class="form-group">
                <label for="user_id">Email de Usuário: </label>
                    
            <select name="user_id" id="user_id" class="form-control">
            <option value="" disabled selected>Escolha um Usuário</option>
            @foreach ($users as $u)
            <option value="{{$u->id}}">{{$u->email}}</option>
            @endforeach
            </select>
        </div>
          </p>
        </div>
    
        <div class="col">
           <p>  <div class="form-group">
            <label for="equipamento_id">Equipamento: </label>
            
            <select name="equipamento_id" id="equipamento_id" class="form-control">
                <option value="" disabled selected>Escolha um Equipamento</option>
                @foreach ($equipamentos as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
                </select>
        </div>
     </p>
       
        </div>
        <div class="col">
        <p>    <div class="form-group">
            <label for="tipo">Tipo: </label>
            
            <select name="tipo" id="tipo" class="form-control">
                <option value="" disabled selected>Escolha um Tipo</option>
                <option value="1">1 - Preventiva</option>
                <option value="2">2 - Corretiva</option>
                <option value="3">3 - Urgente</option>
            </select>
        </div></p>
        </div>
        
    </div>



  


    <div class="form-group">
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao" class="form-control">
    </div>
    <div class="form-group">
        <label for="datalimite">Data Limite: </label>
        <input type="date" name="datalimite" id="datalimite" class="form-control">
    </div>



    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary" onclick="return verificareg();">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

    

    

</form>




</div>
@endsection