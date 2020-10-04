

@extends('principal')

@section('conteudo')
    

<div class="container-fluid">
    <div class="row bg-warning">

        <div class="col">
           
        </div>
        <div class="col">
           <p> <h1 class="text-white"><i class="fas fa-user-tie"></i> Mural de Vagas</h1></p>
        </div>
        <div class="col">
            
        </div>
    </div>

 

</div>

<div class="container-fluid">


    <div class="row">

      <div class="col">
        <p> <h3 class="">Filtrar vagas:</h3> </p>
      </div>
      <div class="col">
        <br>
        <p>
        <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Pesquise uma vaga, local ..">
        </p>
      
      </div>
      <div class="col">

        <div class="form-group">
          <br>
          <p>
          
          <select name="tipo" id="tipo" class="form-control" onchange="myFunction2()">
              <option value="" disabled selected>Filtre pelo tipo da vaga</option>
             
              <option value="Trainee">Trainee</option>
              <option value="Estágio">Estágio</option>
              <option value="Estágio e Trainee">Estágio e Trainee</option>
              
             
              </select>
            </p>
      </div>
      </div>
  </div>

  <div class="row bg-info">

    <div class="col">
       
    </div>
    <div class="col">
       <p> <h1 class="text-white">Inscrições Abertas</h1> </p>
    </div>
    <div class="col">
        
    </div>
</div>

<br>

</div>


<div class="row">
    
@foreach ($vagas as $v)
    @if($v->status == 2)
    <div class="col-3">
    <div class="card" id="cards" style="width: 18rem;">
        @if($v->tipo == 'E')
        <img width="15%" class="card-img-top" src="{{asset('/img/estagio.jpg')}}" alt="Card image">
        <!--Fonte: http://pioneiro.clicrbs.com.br/rs/politica/noticia/2019/10/divulgado-resultado-do-processo-seletivo-para-estagiarios-da-prefeitura-de-caxias-11881955.html-->
        @else
        <img class="card-img-top" src="{{asset('/img/novo-profissional-do-futuro-1.png')}}" alt="Card image">
        <!--Fonte: https://www1.bytebio.com/mercado-de-trabalho-do-futuro/-->
        @endif
        <div class="card-body bg-info">
          <h5 class="card-title text-white"><b>{{$v->titulo}}</b></h5>
          <p class="card-text text-white"><b>Empresa:</b> {{$v->empresa}}</p>
        </div>
        <ul class="list-group list-group-flush ">
        <li class="list-group-item "><b>Local:</b> <a class="text-dark">{{$v->local}}</a></li>
          <li class="list-group-item "><b>Área:</b>
         @if($v->area == 'EC')
         Engenharia da Computação
         @elseif($v->area == 'EE')
         Engenharia Elétrica
         @elseif($v->area == 'EP')
         Engenharia de Produção
         @elseif($v->area == 'SI')
         Sistemas de Informação
         @endif
        </li>
          <li class="list-group-item" id="tipo"><b>Tipo:</b> 
            @if($v->tipo == 'T')
            <a class="text-dark">Trainee</a>
            @elseif($v->tipo == 'E')
            <a class="text-dark">Estágio</a>
            @elseif($v->tipo == 'E/T')
            <a class="text-dark">Estágio e Trainee</a>
            
            @endif
        
        </li>
          <li class="list-group-item "><b>Descrição:</b> {{$v->descricao}}</li>
          <li class="list-group-item "><b>Encerramento:</b> <input class="bg-info text-white" type="date" value="{{$v->data}}" disabled></li>
        </ul>
        <div class="card-body">
          
          <a href="{{$v->link}}" class="btn btn-info"  target="_blank">Link de Inscrição</a>
        </div>
      </div>
    </div>
    <br>
    @endif
 

@endforeach

</div>

<br>

<div class="container-fluid">
    <div class="row bg-danger">

        <div class="col">
           
        </div>
        <div class="col">
           <p> <h1 class="text-white">Inscrições Encerradas</h1> </p>
        </div>
        <div class="col">
            
        </div>
    </div>

    <br>

</div>

<div class="row">
    
@foreach ($vagas as $v)
    @if($v->status == 3)
    <div class="col-3">
    <div class="card " style="width: 18rem;">
        <img class="card-img-top" src="{{asset('/img/img01.png')}}" alt="Card image">
        <div class="card-body bg-danger">
          <h5 class="card-title text-white"><b>{{$v->titulo}}</b></h5>
          <p class="card-text text-white"><b>Empresa:</b> {{$v->empresa}}</p>
        </div>
        <ul class="list-group list-group-flush ">
        <li class="list-group-item "><b>Local:</b> <a class="text-dark">{{$v->local}}</a></li>
          <li class="list-group-item "><b>Área:</b>
         @if($v->area == 'EC')
         Engenharia da Computação
         @elseif($v->area == 'EE')
         Engenharia Elétrica
         @elseif($v->area == 'EP')
         Engenharia de Produção
         @elseif($v->area == 'SI')
         Sistemas de Informação
         @endif
        </li>
          <li class="list-group-item "><b>Tipo:</b> 
            @if($v->tipo == 'T')
            <a class="text-dark">Trainee</a>
            @elseif($v->tipo == 'E')
            <a class="text-dark">Estágio</a>
            @elseif($v->tipo == 'E/T')
            <a class="text-dark">Estágio e Trainee</a>
            
            @endif
        
        </li>
          <li class="list-group-item "><b>Descrição:</b> {{$v->descricao}}</li>
        </ul>
        <div class="card-body">
          
          <a href="" class="btn btn-danger"  aria-disabled="true"><i class="fas fa-frown"></i> Inscrições Encerradas</a>
        </div>
      </div>
    </div>
    @endif
@endforeach

</div>

@endsection