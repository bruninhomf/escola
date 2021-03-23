@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card register-card-body">
                <p class="login-box-msg">CADASTRAR USUÁRIO</p>
    
                <form method="post" action="{{ route('register') }}">
                    @csrf
    
                    <div class="input-group mb-3">
                        <input type="text"
                               name="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}"
                               placeholder="Nome Completo">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
    
                    <div class="input-group mb-3">
                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               class="form-control @error('email') is-invalid @enderror"
                               placeholder="E-mail">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
    
                    <div class="input-group mb-3">
                        <input type="password"
                               name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
    
                    <div class="input-group mb-3">
                        <input type="password"
                               name="password_confirmation"
                               class="form-control"
                               placeholder="Repita a senha">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                        </div>
                    </div>
    
                    <div class="row justify-content-end">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
