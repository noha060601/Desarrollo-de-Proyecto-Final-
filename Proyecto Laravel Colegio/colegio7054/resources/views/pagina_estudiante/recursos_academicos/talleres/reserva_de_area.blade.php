@extends('adminlte::page')

@section('title', 'Gestión de Talleres y Cursos')

@section('content_header')

    <div class="p-3 bg-dark text-white rounded shadow-sm">
        <h1 class="d-flex align-items-center">
            <i class="fas fa-book-open text-primary mr-2"></i>
            Registro de Talleres y Cursos
        </h1>
        <p class="text-muted mt-2">Realiza tu registro de talleres y tutorias </p>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4 class="card-title mb-0">Formulario de Registro</h4>
    </div>
    <div class="card-body">
        <form>


            <div class="row">
                <!-- Nombre del curso o taller -->
                <div class="col-md-6 mb-3">
                    <label for="nombre">Nombre del Taller o Curso</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del curso o taller" required>
                </div>

                <!-- Modalidad -->
                <div class="col-md-6 mb-3">
                    <label for="modalidad">Modalidad</label>
                    <select class="form-control" id="modalidad" name="modalidad" required>
                        <option value="">Seleccione una modalidad</option>
                        <option value="presencial">Presencial</option>
                        <option value="virtual">Virtual</option>
                        <option value="mixta">Mixta</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <!-- Fecha de inicio -->
                <div class="col-md-6 mb-3">
                    <label for="fecha_inicio">Fecha de Inicio</label>
                    <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                </div>

                <!-- Fecha de finalización -->
                <div class="col-md-6 mb-3">
                    <label for="fecha_fin">Fecha de Finalización</label>
                    <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                </div>
            </div>

            <!-- Duración en horas -->
            <div class="form-group mb-3">
                <label for="duracion">Duración (Horas)</label>
                <input type="number" class="form-control" id="duracion" name="duracion" min="1" placeholder="Ejemplo: 20" required>
            </div>

            <!-- Descripción -->
            <div class="form-group mb-3">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción del taller o curso" required></textarea>
            </div>

            <!-- Botones de acción -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success mx-2">Registrar</button>
                <button type="reset" class="btn btn-secondary mx-2">Limpiar</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('css')
    <!-- Puedes agregar estilos personalizados aquí -->
@endsection

@section('js')
    <!-- Puedes agregar scripts personalizados aquí -->
@endsection

