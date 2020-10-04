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
           <p> <h1><i class="fas fa-wrench"></i> Manutenções</h1></p>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col">
            <p>  <a type="button" class="btn btn-primary  btn-block" href="{{ route('registros.index')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
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
            <p>  <h4>Editar Manutenção</h4></p>
       
        </div>
        <div class="col">
             </div>
        
    </div>

    <form method="post" action="{{ route('registros.update', $registro->id)}}">
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
                        
                    @if($registro->user_id == $u->id) 
                        selected
                    @endif
                        
                        
                        
                    >{{$u->email}}</option>
                    @endforeach
        
        
                </select>    
            
            
            </div></p>
        </div>

        <div class="col">
            <p>      <div class="form-group">
                <label for="equipamento_id">Equipamento: </label>
               
                <select name="equipamento_id" id="equipamento_id" class="form-control">
        
                    @foreach ($equipamentos as $e)
                    <option value="{{$e->id}}"
                        
                    @if($registro->equipamento_id == $e->id) 
                        selected
                    @endif
                        
                        
                        
                    >{{$e->nome}}</option>
                    @endforeach
        
        
                </select>    
            </div></p>
       
        </div>
        
    </div>

    

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="{{$registro->descricao}}">
            </div>
        </div>

       
    </div>





    <div class="row">
        <div class="col">
        <p>
            <div class="form-group">
                <label for="datalimite">Data Limite: </label>
                <input type="date" name="datalimite" id="datalimite" class="form-control" value="{{$registro->datalimite}}">
            </div></p>
        </div>

        <div class="col">
            <p> 
                <div class="form-group">
                    <label for="tipo">Tipo: </label>
                   
                    <select name="tipo" id="tipo" class="form-control">
        
                        
                        <option value="1"
                        @if($registro->tipo == 1)
                        selected
                        @endif
                        >1 - Preventiva</option>
                        <option value="2"
                        @if($registro->tipo == 2)
                        selected
                        @endif
                        >2 - Corretiva</option>
                        <option value="3"
                        @if($registro->tipo == 3)
                        selected
                        @endif
                        >3 - Urgente</option>
            
                    </select>    
                


                </div>
            </p>
       
        </div>
       
    </div>

    <div class="row">
    
        <div class="col">
            <p>     <div class="text-right">
                <input type="submit" value="Atualizar" class="btn btn-primary">
                <input type="reset" value="Voltar Valores" class="btn btn-danger">
            </div>

        </form></p>
       
        </div>
      
</div> 
    </div>








    


</div>

@endsection