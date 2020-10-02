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
           <p> <h1><i class="fas fa-hammer"></i> Equipamentos</h1></p>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-primary  btn-block" href="{{ route('equipamentos.index')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
        </div>

        <div class="col">
           
       
        </div>
        <div class="col">
             </div>
        
    </div>
 
<br>


</div>

<div class="container-fluid">


    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <p>  <h5>ID: {{$equipamento->id}}</h5> </p>
       
        </div>
        <div class="col">
             </div>
        
    </div>

    <div class="row">
        <div class="col">
            </div>

        <div class="col">
           <p> <h5>Nome do equipamento: {{$equipamento->nome}}</h5></p>
       
        </div>
        <div class="col">
             </div>
        
    </div>
<br>
<br>
<br>
<br>
    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <p> <a href="{{route('equipamentos.edit', $equipamento->id)}}" class="btn btn-primary btn-lg btn-block">Editar</a> </p>
       
        </div>
        <div class="col">
             </div>
        
    </div>

    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <p> <form name="frmDelete" action="{{route('equipamentos.destroy', $equipamento->id)}}" method="post" 
                onsubmit="return confirm('Confirma a exclusão do equipamento?')">
            
            @csrf
            @method('DELETE')
            
            <input type="submit" value="Excluir" class="btn btn-danger btn-lg btn-block">
            
            
            </form> </p>
       
        </div>
        <div class="col">
             </div>
        
    </div>



    
</div>





@endsection