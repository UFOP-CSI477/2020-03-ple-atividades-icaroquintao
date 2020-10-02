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
           <p> <h1><i class="fas fa-hammer"></i> Cadastrar Equipamento</h1></p>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-primary  btn-block" href="{{ route('areaadm')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
        </div>

        <div class="col">
           
       
        </div>
        <div class="col">
             </div>
        
    </div>
 
<br>
<br>
<br>
    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <div class="alert alert-warning" role="alert" id="mostrar" style="display: none">
                O campo Nome não pode estar vazio, conter números ou caracteres especiais!
              </div>
            <p><form method="post" action="{{ route('equipamentos.store')}}">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
              </p>
       
        </div>
        <div class="col">
             </div>
        
    </div>

    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <p> <div class="text-right">
                <input type="submit" value="Cadastrar" class="btn btn-primary" onclick="return verificaequip();">
                <input type="reset" value="Limpar" class="btn btn-danger">
            </div>
        
            
        
            
        
        </form> </p>
       
        </div>
        <div class="col">
             </div>
        
    </div>




   


  

    
    </div>
<br>
<br>


</div>




    
@endsection