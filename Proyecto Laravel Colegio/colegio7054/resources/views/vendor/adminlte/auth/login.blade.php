@extends('adminlte::auth.auth-page', ['authType' => 'login'])

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <style>
        body.login-page {
            background: linear-gradient(to bottom, #e0f7fa, #ffffff);
        }

        .login-box {
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 20px;
        }

        .login-logo a {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            color: #00695c;
            font-weight: 600;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #00695c;
            border-color: #00695c;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #004d40;
            border-color: #004d40;
        }

        .icheck-primary input:checked + label::before {
            background-color: #00695c;
            border-color: #00695c;
        }

        a {
            color: #00796b;
        }

        a:hover {
            color: #004d40;
        }
    </style>

@stop

@php
    $loginUrl = View::getSection('login_url') ?? config('adminlte.login_url', 'login');
    $registerUrl = View::getSection('register_url') ?? config('adminlte.register_url', 'register');
    $passResetUrl = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset');

    if (config('adminlte.use_route_url', false)) {
        $loginUrl = $loginUrl ? route($loginUrl) : '';
        $registerUrl = $registerUrl ? route($registerUrl) : '';
        $passResetUrl = $passResetUrl ? route($passResetUrl) : '';
    } else {
        $loginUrl = $loginUrl ? url($loginUrl) : '';
        $registerUrl = $registerUrl ? url($registerUrl) : '';
        $passResetUrl = $passResetUrl ? url($passResetUrl) : '';
    }
@endphp

@section('auth_header', 'Bienvenido al Portal Académico')


@section('auth_body')
    <form action="{{ $loginUrl }}" method="post">
        @csrf

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user-graduate"></span> {{-- en vez del ícono del email --}}
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="{{ __('adminlte::adminlte.password') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-key"></span> {{-- en vez del ícono del candado --}}
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Login field --}}
        <div class="row">
            <div class="col-7">
                <div class="icheck-primary" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                       Mantener mis Credenciales 
                       
                    </label>
                </div>
            </div>

            <div class="col-5 text-right">
                <button type="submit" class="btn btn-success btn-block rounded-pill shadow-sm">
                    <i class="fas fa-door-open mr-1"></i>
                    Iniciar sesión
                </button>
            </div>

        </div>
    </form>
@stop

@section('auth_footer')
    <div class="text-center mt-3">
        {{-- Enlace para restablecer contraseña --}}
        @if($passResetUrl)
            <p class="mb-1">
                <a href="{{ $passResetUrl }}" class="text-secondary">
                    <i class="fas fa-question-circle mr-1"></i>
                    ¿Olvidaste tu contraseña?
                </a>
            </p>
        @endif

        {{-- Enlace para registrarse --}}
        @if($registerUrl)
            <p>
                <a href="{{ $registerUrl }}" class="text-primary font-weight-bold">
                    <i class="fas fa-user-plus mr-1"></i>
                    ¿No tienes una cuenta? Regístrate aquí
                </a>
            </p>
        @endif
    </div>
@stop

