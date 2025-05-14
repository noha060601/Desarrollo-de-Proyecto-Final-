@extends('adminlte::page')

@section('title', 'Registro de Incidencias')

@section('content_header')
   
    <div class="p-3 bg-dark text-white rounded shadow-sm">
        <h1 class="d-flex align-items-center">
            <i class="fas fa-book-open text-primary mr-2"></i>
            Registro de Incidencias de Estudiantes
        </h1>
        <p class="text-muted mt-2">Realiza tu registro de incidencias dentro del aula   </p>
    </div>
@stop

@section('content')
<div class="card-content">
    <div class="card">
        <div class="card-body">
             {{-- Mensaje informativo --}}
            <div class="alert alert-warning" role="alert">
                Por favor, llena este formulario para reportar una incidencia relacionada con un alumno.
            </div>

            {{-- Formulario de registro de incidencia --}}
            <form enctype="multipart/form-data" class="p-4 bg-light border rounded shadow-sm">

                <div class="form-group">
                    <label for="nombreAlumno">Nombre del Estudiante:</label>
                    <input type="text" id="nombreAlumno" name="nombreAlumno" class="form-control" placeholder="Ingresa el nombre del estudiante" required>
                </div>

                <div class="form-group">
                    <label for="codigoAlumno">Código del Estudiante:</label>
                    <input type="text" id="codigoAlumno" name="codigoAlumno" class="form-control" placeholder="Ingresa el código del estudiante" required>
                </div>

                <div class="form-group">
                    <label for="tipoIncidencia">Tipo de Incidencia:</label>
                    <select id="tipoIncidencia" name="tipoIncidencia" class="form-control">
                        <option selected disabled>Selecciona el tipo de incidencia</option>
                        <option value="comportamiento">Comportamiento</option>
                        <option value="asistencia">Asistencia</option>
                        <option value="academico">Académico</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción de la Incidencia:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="4" placeholder="Describe brevemente la incidencia" required></textarea>
                </div>

                <div class="form-group">
                    <label for="fechaIncidencia">Fecha de la Incidencia:</label>
                    <input type="date" id="fechaIncidencia" name="fechaIncidencia" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="evidencia">Subir Evidencia (Opcional):</label>
                    <input type="file" id="evidencia" name="evidencia" class="form-control-file">
                </div>

                {{-- Botón de enviar --}}
                <div class="text-right">
                    <button type="submit" class="btn btn-danger"><i class="fas fa-exclamation-circle"></i> Registrar Incidencia</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
    .bg-danger {
        background-color: #dc3545;
    }
    .container .form-group label {
        font-weight: bold;
    }
    .form-control, .form-control-file {
        border-radius: 5px;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .shadow-sm {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
@stop

@section('js')
<script>
    $(document).ready(function() {
        // Inicializar Select2 en el campo de tipo de incidencia
        $('#tipoIncidencia').select2({
            placeholder: 'Selecciona el tipo de incidencia',
            allowClear: true
        });
    });
</script>
@stop
