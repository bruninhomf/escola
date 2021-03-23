@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Recuperar senha</div>
                <div class="card-body login-card-body">
                    <p>Esqueceu sua senha? Aqui você pode facilmente recuperar uma nova senha.</p>
    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    
                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
    
                        <div class="input-group mb-3">
                            <input type="email"
                                name="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="E-mail">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @if ($errors->has('email'))
                                <span class="error invalid-feedback">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
    
                        <div class="row  justify-content-end">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                            </div>
                        </div>
                    </form>
    
                    <p class="mt-3 mb-1">
                        <a href="{{ route("login") }}">Login</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{ route("register") }}" class="text-center">Cadastrar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
