@extends('adminlte::auth.auth-page', ['authType' => 'register'])

@php
    $loginUrl = View::getSection('login_url') ?? config('adminlte.login_url', 'login');
    $registerUrl = View::getSection('register_url') ?? config('adminlte.register_url', 'register');

    if (config('adminlte.use_route_url', false)) {
        $loginUrl = $loginUrl ? route($loginUrl) : '';
        $registerUrl = $registerUrl ? route($registerUrl) : '';
    } else {
        $loginUrl = $loginUrl ? url($loginUrl) : '';
        $registerUrl = $registerUrl ? url($registerUrl) : '';
    }
@endphp

@section('auth_header', 'Bienvenido nuevo usuario al Portal Académico')

@section('auth_body')
    <form action="{{ $registerUrl }}" method="post">
        @csrf

       {{-- Name field --}}
<div class="input-group mb-3">
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus required>

    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
        </div>
    </div>

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- DNI field --}}
<div class="input-group mb-3">
    <input type="text" name="dni" class="form-control @error('dni') is-invalid @enderror"
        value="{{ old('dni') }}" placeholder="DNI (8 dígitos)" maxlength="8"
        pattern="\d{8}" title="Debe tener exactamente 8 dígitos numéricos" required>

    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-id-card {{ config('adminlte.classes_auth_icon', '') }}"></span>
        </div>
    </div>

    @error('dni')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- Dirección field --}}
<div class="input-group mb-3">
    <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror"
        value="{{ old('direccion') }}" placeholder="Dirección" required>

    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-map-marker-alt {{ config('adminlte.classes_auth_icon', '') }}"></span>
        </div>
    </div>

    @error('direccion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- Fecha de nacimiento field --}}
    <div class="input-group mb-3">
    <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror"
        value="{{ old('fecha_nacimiento') }}" placeholder="Fecha de nacimiento" required>

    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-calendar {{ config('adminlte.classes_auth_icon', '') }}"></span>
        </div>
    </div>

    @error('fecha_nacimiento')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" required>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
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
                placeholder="{{ __('adminlte::adminlte.password') }}" required>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Confirm password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror"
                placeholder="{{ __('adminlte::adminlte.retype_password') }}" required>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Select de tipo de usuario --}}
        <div class="mb-3">
            <label for="tipo_usuario" class="form-label">Tipo de usuario</label>
            <select name="tipo_usuario" id="tipo_usuario" class="form-control" required>
                <option value="">Seleccione un tipo</option>
                <option value="estudiante">Alumno</option>
                <option value="docente">Profesor</option>
                <option value="administrador">Administrador</option>
                <option value="apoderado">Apoderado</option>
            </select>
        </div>
        {{-- Select de Grado (visible solo si es alumno) --}}
        <div class="input-group mb-3 d-none" id="grupo-grado">
           <select name="grado_id" class="form-control">
                <option value="" disabled selected>Selecciona grado</option>
                @foreach($grados as $grado)
                    <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>
                @endforeach
            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-graduation-cap"></span>
                </div>
            </div>
        </div>

        {{-- Select de Sección (visible solo si es alumno) --}}
        <div class="input-group mb-3 d-none" id="grupo-seccion">
            <select name="seccion_id" class="form-control">
                <option value="" disabled selected>Selecciona sección</option>
                @foreach($secciones as $seccion)
                    <option value="{{ $seccion->id }}">{{ $seccion->nombre }} - {{ $seccion->grado->nombre }}</option>
                @endforeach
            </select>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-door-open"></span>
                </div>
            </div>
        </div>


    {{-- Register button --}}
        <div class="text-right">
            <button type="submit" class="btn btn-info btn-block rounded-pill shadow-sm">
                <i class="fas fa-user-graduate mr-1"></i>
                Registrarme en el portal
            </button>
        </div>


    </form>
@stop

@section('auth_footer')
    <div class="text-center mt-3">
        <p class="mb-0">
            ¿Ya tienes una cuenta?
            <a href="{{ $loginUrl }}" class="text-primary font-weight-bold">
                <i class="fas fa-sign-in-alt mr-1"></i> Inicia sesión aquí
            </a>
        </p>
    </div>
@stop
@section('adminlte_css_pre')
    <style>
        .form-control {
            border-radius: 8px;
        }

        .btn-info {
            background-color: #0288d1;
            border-color: #0288d1;
        }

        .btn-info:hover {
            background-color: #0277bd;
            border-color: #0277bd;
        }

        .login-page, .register-page {
            background: linear-gradient(to bottom, #e3f2fd, #ffffff);
        }

        .input-group-text {
            background-color: #f0f0f0;
            border-radius: 0 8px 8px 0;
        }
    </style>
@stop



@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const userTypeSelect = document.querySelector('select[name="tipo_usuario"]');
    const gradoDiv = document.getElementById('grupo-grado');
    const seccionDiv = document.getElementById('grupo-seccion');

    if (userTypeSelect) {
        userTypeSelect.addEventListener('change', function () {
            if (this.value === 'estudiante') {
                gradoDiv.classList.remove('d-none');
                seccionDiv.classList.remove('d-none');
            } else {
                gradoDiv.classList.add('d-none');
                seccionDiv.classList.add('d-none');
            }
        });
    } else {
        console.error('No se encontró el select con name="tipo_usuario"');
    }
});
</script>
@endsection



