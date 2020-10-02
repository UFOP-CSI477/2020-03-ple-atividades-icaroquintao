@extends('principal')

@section('conteudo')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary"><a class="text-white">Bem vindx, {{ Auth::user()->name }}!</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você agora pode acessar a Área Administrativa do Sistema!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
