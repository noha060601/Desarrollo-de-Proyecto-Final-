@extends('adminlte::page')

@section('title', 'Reservar Libros')

@section('content_header')

    <div class="p-3 bg-dark text-white rounded shadow-sm">
        <h1 class="d-flex align-items-center">
            <i class="fas fa-book-open text-primary mr-2"></i>
            Reservar Libros
        </h1>
        <p class="text-muted mt-2">Realiza tu registro de libros y recursos academicos  </p>
    </div>
@stop

@section('content')
<div class="card-content">
    <div class="card">
        <div class="card-body">
        {{-- Mensaje de información --}}
            <div class="alert alert-info" role="alert">
                Completa el siguiente formulario para reservar un libro.
            </div>

            {{-- Formulario de reserva --}}
            <form class="p-4 bg-light border rounded shadow-sm">

                <div class="form-group">
                    <label for="nombreAlumno">Nombre del Alumno:</label>
                    <input type="text" id="nombreAlumno" name="nombreAlumno" class="form-control" placeholder="Ingresa el nombre del alumno" required>
                </div>

                <div class="form-group">
                    <label for="codigoAlumno">Código del Alumno:</label>
                    <input type="text" id="codigoAlumno" name="codigoAlumno" class="form-control" placeholder="Ingresa el código del alumno" required>
                </div>

                <div class="form-group">
                    <label for="libro">Libro a Reservar:</label>
                    <select id="libro" name="libro" class="form-control">
                        <option selected disabled>Selecciona el libro</option>
                        <option value="matematicas">Matemáticas Básicas</option>
                        <option value="fisica">Física General</option>
                        <option value="quimica">Química Orgánica</option>
                        <option value="literatura">Literatura Universal</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fechaReserva">Fecha de Reserva:</label>
                    <input type="date" id="fechaReserva" name="fechaReserva" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="observaciones">Observaciones:</label>
                    <textarea id="observaciones" name="observaciones" class="form-control" rows="3" placeholder="Especifica detalles adicionales (opcional)"></textarea>
                </div>

                {{-- Botón de enviar --}}
                <div class="text-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Reservar Libro</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop

@section('css')
<style>
    .bg-primary {
        background-color: #007bff;
    }
    .container .form-group label {
        font-weight: bold;
    }
    .form-control {
        border-radius: 5px;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    .shadow-sm {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#libro').select2({
            placeholder: 'Selecciona el libro',
            allowClear: true
        });
    });
</script>
@stop
