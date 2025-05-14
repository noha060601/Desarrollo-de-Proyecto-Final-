@extends('adminlte::page')

@section('title', 'Mis Sesiones en Línea')

@section('content_header')
<div class="bg-warning text-white p-3 rounded">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">

            <div>
                <h1 class="m-0">Mis sesiones en línea</h1>
                <p class="text-sm">Las sesiones del día se publican con 2 horas de anticipación</p>
            </div>
        </div>
        <img src="{{ asset('imagenes/insig1.png') }}" alt="Avatar" class="rounded-circle" style="width: 48px; height: 48px;">
    </div>
</div>
@endsection

@section('content')

    <div class="card-content">
        <div class="card">
            <div class="card-body">
                 {{-- Mensaje de bienvenida --}}
                <div class="card bg-dark text-white p-3 mb-4">
                    <p>Bienvenido <span class="font-weight-bold">Hernandez</span>, para iniciar tu sesión virtual sigue las siguientes instrucciones:</p>
                    <ul class="mt-3">
                        <li>
                            Primero verifica si tienes instalado Zoom en tu ordenador, caso contrario descarga la aplicación
                            <a href="zoommtg://zoom.us/join?confno=YOUR_MEETING_ID" class="text-info" target="_blank" id="zoom-link">AQUÍ</a>.
                        </li>
                        <li>Ingrese <a href="#" class="text-info">AQUÍ</a> para ver el video tutorial, donde indicamos cómo instalar Zoom.</li>
                        <li>Accede a tu sesión virtual haciendo click en el botón "INICIAR ZOOM".</li>
                    </ul>
                </div>

                {{-- Próximas sesiones virtuales --}}
                <div class="card">
                    <div class="card-header d-flex align-items-center bg-dark text-white">
                        <i class="fas fa-globe fa-lg me-2"></i>
                        <h5 class="m-0">Próximas sesiones virtuales</h5>
                    </div>

                    <div class="card-body">
                        {{-- Filtros de tabla --}}
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center gap-2">
                                <span>Mostrar</span>
                                <select class="form-select form-select-sm bg-secondary text-white" style="width: 70px;">
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                <span>registros</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span>Buscar:</span>
                                <input type="text" class="form-control form-control-sm bg-secondary text-white" placeholder="Buscar...">
                            </div>
                        </div>

                        {{-- Tabla de sesiones --}}
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>FECHA</th>
                                        <th>CURSO</th>
                                        <th>BIMESTRE</th>
                                        <th>SESIÓN</th>
                                        <th>DESCRIPCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>02/11/2024 18:15</td>
                                        <td>MATEMATICA 1 </td>
                                        <td>3</td>
                                        <td>10</td>
                                        <td>Figuras geométricas básicas: Cuadrados, rectángulos, círculos, triángulos, etc. Los estudiantes deben identificar y clasificar estas formas.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- Paginación --}}
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <p class="text-sm">Mostrando 1 a 1 de 1 registros</p>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-secondary">Anterior</button>
                                <button class="btn btn-sm btn-warning">1</button>
                                <button class="btn btn-sm btn-secondary">Siguiente</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- Script para manejar el enlace a Zoom --}}
@section('js')
<script>
    document.getElementById('zoom-link').addEventListener('click', function(event) {
        // Espera un momento para ver si Zoom se abre
        setTimeout(function() {
            // Si no se abre, redirige a la página de descarga de Zoom
            window.location.href = 'https://zoom.us/download';
        }, 1000);
    });
</script>
@endsection

