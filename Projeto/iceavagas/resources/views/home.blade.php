@extends('principal')

@section('conteudo')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">Bem-vindx!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->admin == 1)
                    Admin {{Auth::user()->name}}
                    <br>
                    <br>
                    <a class="btn btn-info" href="{{route('admin')}}">Acessar Área Administrativa</a>
                    @elseif(Auth::user()->admin == 0)
                    Usuário {{Auth::user()->name}}
                    <br>
                    <br>
                    <a class="btn btn-info" href="{{route('geral.index')}}">Ver Vagas</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
