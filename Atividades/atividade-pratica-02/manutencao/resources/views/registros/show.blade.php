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
            <p>  <h4>Detalhes da Manutenção</h4></p>
       
        </div>
        <div class="col">
             </div>
        
    </div>



    <div class="row">
    
        <div class="col">
            <p> 
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                
                        
                
                        <thead>
                
                            <tr class="thead-dark">
                                <th>ID</th>
                                <th>Equipamento</th>
                                <th>Usuário</th>
                                <th>Descrição</th>
                                <th>Data Limite</th>
                                <th>Tipo</th>
                               
                                
                               
                            </tr>
                        </thead>
                
                        <tbody>
                          
                            
                                <tr>
                                <td> {{$registro->id}}</td>                 
                                <td> {{$registro->equipamento->nome}}</td>
                                <td> {{$registro->user->name}}</td> 
                                <td> {{$registro->descricao}}</td> 
                                <td> {{$registro->datalimite}}</td> 
                                <td>  @if( $registro->tipo == 1)
                                    Preventiva
                                
                                
                                    @elseif($registro->tipo == 2)
                                        Corretiva
                                    
                                
                                    @elseif($registro->tipo == 3)
                                        Urgente
                                    @endif</td> 
                                 
                                
                                </tr>
                          
                
                         
                        </tbody>
                
                       
                
                    </table>
                </div>

            </p>
       
        </div>
        
        
    </div>

    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <p><a href="{{route('registros.edit', $registro->id)}}" class="btn btn-primary btn-lg btn-block">Editar</a>  </p>
       
        </div>
        <div class="col">
             </div>
        
    </div>
    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <p><form name="frmDelete" action="{{route('registros.destroy', $registro->id)}}" method="post" 
                onsubmit="return confirm('Confirma a exclusão do registro?')">
            
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