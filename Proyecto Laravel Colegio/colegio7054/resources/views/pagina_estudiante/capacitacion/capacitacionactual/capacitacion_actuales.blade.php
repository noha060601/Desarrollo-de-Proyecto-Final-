@extends('adminlte::page')

@section('title', 'Lista de Cursos y Talleres')

@section('content_header')
    <div class="p-3 bg-dark text-white rounded shadow-sm">
        <h1 class="d-flex align-items-center">
            <i class="fas fa-book-open text-primary mr-2"></i>
            Cursos Actuales
        </h1>
        <p class="text-muted mt-2">Accede a tus cursos y gestiona los detalles</p>
    </div>
@endsection

@section('content')
    <div class="row">
        @foreach ($cursos as $curso)
            <div class="col-md-4">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover; background-position: center;">
                        <h3 class="widget-user-username text-white">{{ $curso->Nombre_Curso }}</h3>
                        <h5 class="widget-user-desc text-white">Profesor: {{ $curso->Nombre_Profesor }} {{ $curso->Apellido_Profesor }}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2 perfil-image" src="{{ asset('imagenes/director.PNG') }}" alt="Imagen del Curso">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Fecha de Inicio</h5>
                                    <span class="description-text">{{ $curso->Fecha_Inicio }}</span>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Fecha de Fin</h5>
                                    <span class="description-text">{{ $curso->Fecha_Fin }}</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">Duración</h5>
                                    <span class="description-text">{{ $curso->Duracion }} hrs</span>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">{{ $curso->Descripcion }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-info btn-sm">Ver SILABO</a>
                            <a href="#" class="btn btn-warning btn-sm">INGRESAR AL CURSO</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('css')
    <style>
         .widget-user .widget-user-header {
            text-align: center;
            height: 180px;
            position: relative;
            color: white;
        }
        .widget-user .widget-user-username {
            font-weight: bold;
            font-size: 1.2em;
        }
        .widget-user .description-header {
            font-size: 1em;
            font-weight: bold;
        }
        .widget-user .description-text {
            font-size: 0.9em;
            color: #555;
        }
        .widget-user .card-footer {
            padding-top: 20px;
        }
        .widget-user-image .larger-image {
            width: 100px;
            height: 100px;
        }
    </style>
@endsection

@section('js')
    <script>
        console.log('Capacitaciones Actuales cargadas.');
    </script>
@endsection

