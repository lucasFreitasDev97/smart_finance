@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">{{ __('Redefinir Senha') }}</h4>
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-muted">
                        Esqueceu sua senha? Sem problemas. Apenas nos informe seu endereço de e-mail e nós enviaremos um link para você redefinir sua senha.
                    </p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Endereço de E-mail') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Enviar Link de Redefinição') }}
                            </button>
                            <a class="btn btn-link" href="{{ route('login') }}">
                                Voltar para o Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
