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
            <p>  <a type="button" class="btn btn-primary  btn-block" href="{{ route('vagas.index')}}"><i class="fas fa-arrow-left"></i> Voltar</a>           </p>
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
            <p>  <h4>Detalhes da Vaga #{{$vaga->id}}</h4></p>
       
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
                                <th>Usuário que indicou</th>
                                <th>Empresa</th>
                                <th>Email da Empresa</th>
                                <th>Descrição</th>
                                <th>Local</th>
                                <th>Data de Encerramento das Insc</th>
                                <th>Area</th>
                                <th>Tipo</th>
                                <th>Status</th>
                                <th>Link de Inscrição</th>
                               
                                
                               
                            </tr>
                        </thead>
                
                        <tbody>
                            <tr>
                                <td> {{$vaga->id}}</td>                 
                                <td> {{$vaga->user->name}}</td>
                                <td> {{$vaga->empresa}}</td> 
                                <td> {{$vaga->email}}</td> 
                                <td> {{$vaga->descricao}}</td> 
                                <td> {{$vaga->local}}</td> 
                                <td> {{$vaga->data}}</td> 
                                <td> {{$vaga->area}}</td> 
                                <td> {{$vaga->tipo}}</td>
                                
                                <td
                                @if( $vaga->status == 1)
                                    class="bg-warning"
                                
                                
                                    @elseif($vaga->status == 2)
                                    class="bg-success"
                                    
                                
                                    
                                    @endif
                                
                                >  @if( $vaga->status == 1)
                                    Pendente
                                
                                
                                    @elseif($vaga->status == 2)
                                        Exibir
                                    
                                
                                    @elseif($vaga->status == 3)
                                        Encerrado
                                    @endif</td>  
                                <td> <a href="{{$vaga->link}}"> {{$vaga->link}} </a></td>
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
            <p><a href="{{route('vagas.edit', $vaga->id)}}" class="btn btn-primary btn-lg btn-block">Editar</a>  </p>
       
        </div>
        <div class="col">
             </div>
        
    </div>
    <div class="row">
        <div class="col">
            </div>

        <div class="col">
            <p><form name="frmDelete" action="{{route('vagas.destroy', $vaga->id)}}" method="post" 
                onsubmit="return confirm('Confirma a exclusão da vaga?')">
            
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