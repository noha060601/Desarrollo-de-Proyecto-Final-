@extends('adminlte::page')

@section('title', 'Sesiones Virtuales Pasadas')

@section('content_header')
    <div class="bg-dark d-flex justify-content-between align-items-center p-3">
        <div class="d-flex align-items-center">
            <i class="fas fa-history fa-2x mr-2 text-white"></i>
            <h1 class="m-0 text-white">Sesiones Virtuales Pasadas</h1>
        </div>
        <img src="{{ asset('imagenes/insig1.png') }}" alt="Avatar" class="img-circle elevation-2" style="width: 48px; height: 48px;">
    </div>
@stop


@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="curriculaFilter">Bimestre:</label>
                        <select id="curriculaFilter" class="form-control">
                            <option>INGENIERÍA DE SISTEMAS - C1 - PREGRADO (Curricular)</option>
                            <option>INGENIERÍA DE SOFWARE - C2 - PREGRADO (Curricular)</option>
                            <option>INGENIERÍA DE REDES - C3 - PREGRADO (Curricular)</option>
                            <option>INGENIERÍA SEGURIDAD - C4 - PREGRADO (Curricular)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="periodFilter">Mes:</label>
                        <select id="periodFilter" class="form-control">
                            <option>202401</option>
                            <option>202402</option>
                            <option>202403</option>
                            <option>202404</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subjectFilter">Curso:</label>
                        <select id="subjectFilter" class="form-control">
                            <option>Todos</option>
                            <option>PARA MAESTROS</option>
                            <option>PARA TUTORES</option>
                            <option>PARA DIRECTORES</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Sesiones en formato de tarjetas --}}
    <div class="row">

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card border-dark shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title m-0"></h5>
                </div>
                <div class="card-body">
                    <p><strong>Fecha:</strong> </p>
                    <p><strong>Ciclo:</strong> </p>
                    <p><strong>Sesión:</strong> </p>
                    <p><strong>Tema:</strong> </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-sm btn-secondary" onclick="verGrabacion('')">
                        <i class="fas fa-video"></i> Ver Grabación
                    </button>
                    <button class="btn btn-sm btn-success" onclick="descargarGrabacion('', '')">
                        <i class="fas fa-download"></i> Descargar
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card border-dark shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title m-0"></h5>
                </div>
                <div class="card-body">
                    <p><strong>Fecha:</strong> </p>
                    <p><strong>Ciclo:</strong> </p>
                    <p><strong>Sesión:</strong> </p>
                    <p><strong>Tema:</strong> </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-sm btn-secondary" onclick="verGrabacion('')">
                        <i class="fas fa-video"></i> Ver Grabación
                    </button>
                    <button class="btn btn-sm btn-success" onclick="descargarGrabacion('', '')">
                        <i class="fas fa-download"></i> Descargar
                    </button>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card border-dark shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title m-0"></h5>
                </div>
                <div class="card-body">
                    <p><strong>Fecha:</strong> </p>
                    <p><strong>Ciclo:</strong> </p>
                    <p><strong>Sesión:</strong> </p>
                    <p><strong>Tema:</strong> </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-sm btn-secondary" onclick="verGrabacion('')">
                        <i class="fas fa-video"></i> Ver Grabación
                    </button>
                    <button class="btn btn-sm btn-success" onclick="descargarGrabacion('', '')">
                        <i class="fas fa-download"></i> Descargar
                    </button>
                </div>
            </div>
        </div>

    </div>

    {{-- Paginación --}}
    <div class="d-flex justify-content-between align-items-center mt-4">
        <p class="text-muted">REGISTROS GRABADOS</p>
        <div>

        </div>
    </div>
</div>
@stop

@section('css')
<style>
    .bg-dark {
        background-color: #343a40;
    }
    .card {
        border-radius: 10px;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .card-header {
        font-weight: bold;
        font-size: 1.1em;
        border-radius: 10px 10px 0 0;
    }
    .card-footer {
        background-color: #f8f9fa;
        border-radius: 0 0 10px 10px;
    }
    .btn-secondary, .btn-success {
        border-radius: 5px;
        font-weight: bold;
    }
    .btn-secondary:hover {
        background-color: #ea981d;
    }
    .btn-success:hover {
        background-color: #28a745;
    }
</style>
@stop

@section('js')
<script>
    // Función para ver la grabación en una nueva ventana
    function verGrabacion(videoUrl) {
        window.open(videoUrl, '_blank');
    }

    // Función para descargar la grabación
    function descargarGrabacion(videoUrl, titulo) {
        const link = document.createElement('a');
        link.href = videoUrl;
        link.download = titulo + '.mp4';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    $(document).ready(function() {
        // Inicializar Select2 en los filtros
        $('#curriculaFilter, #periodFilter, #subjectFilter').select2();
    });
</script>
@stop
