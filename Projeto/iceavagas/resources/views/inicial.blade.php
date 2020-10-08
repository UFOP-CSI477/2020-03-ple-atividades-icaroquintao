@extends('principal')


@section('conteudo')

<!--<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Doe sangue</h1>
      <p class="lead">Salve vidas!</p>
    </div>
  </div>-->
  
  <div class="row  bg-info">

    <div class="col-2">
        
    </div>
    <div class="col">
        <div class="jumbotron jumbotron-fluid bg-white">
            <div class="container">
              <h1 class="display-4 text-info">Sistema de Divulgação de Vagas de Trainee e Estágio</h1>
              <p class="lead text-info">Instituto de Ciências Exatas Aplicadas - Universidade Federal de Ouro Preto</p>
            </div>
          </div>
    </div>
    <div class="col-2">

    </div>
</div>
<br>
<div class="container">
<!--Fonte: https://getbootstrap.com/docs/4.0/examples/carousel/-->
<div class="row ">
  <div class="col-lg-4  text-info">
    
    <i class="fas fa-users fa-10x"></i>
    <h2>Faça Parte</h2>
    <p>No ICEA Vagas temos a maior comunidade de alunos e ex-alunos compartilhando informações de vagas em todas as áreas. Seja você da Engenharia da Computação, Engenharia Elétrica, Engenharia de Produção ou Sistemas de Informação! Faça sua inscrição agora mesmo!</p>
    <p><a class="btn btn-info" href="{{ route('register') }}" role="button">Saiba mais »</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4  text-info">
    <i class="fab fa-searchengin fa-10x"></i>
    <h2>Ache a sua Vaga</h2>
    <p>Inicie sua Jornada no Mercado de maneira certa, ache a vaga com o seu perfil e onde você quer. Filtre por localidade ou tipo da vaga, seja ela Trainee ou Estágio! Confira as vagas em aberto clicando no botão abaixo.</p>
    <p><a class="btn btn-info" href="{{route('geral.index')}}" role="button">Saiba mais »</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4  text-info">
    <i class="fas fa-chart-line fa-10x"></i>
    <h2>Indique Vagas</h2>
    <p>Fortaleça a comunidade do ICEA Vagas. Indique vagas de processos de Trainee ou Estágio e ajude outros colegas a encontrar a vaga ideal para começar sua jornada no mercado de trabalho!</p>
    <p><a class="btn btn-info" href="{{route('geral.create')}}" role="button">Saiba mais »</a></p>
  </div><!-- /.col-lg-4 -->
</div>
  <div class="row  bg-info">

    <div class="col-2">
        
    </div>
    <div class="col">
       
    </div>
    <div class="col-2">

    </div>
</div>
</div>

    @endsection