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
           <p> <h1><i class="fas fa-list-alt"></i> Relatório de Usuários</h1></p>
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






</div>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <caption>Lista de Usuários do Sistema</caption>

        <thead>

            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                
           
                
               
            </tr>
        </thead>

        <tbody>
          
            @foreach ($usuarios as $u)
                <tr>
                <td> {{$u->id}}</td>                 
                <td> {{$u->name}}</td>
                <td> {{$u->email}}</td> 
             
                 
         
                </tr>
            @endforeach

         
        </tbody>

       

    </table>
</div>

   

@endsection