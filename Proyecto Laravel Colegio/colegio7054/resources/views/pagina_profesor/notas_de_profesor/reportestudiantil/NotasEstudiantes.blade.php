@extends('adminlte::page')

@section('title', 'Registro de Notas de Alumnos')

@section('content_header')
    <h1>Registro de Notas por Competencia</h1>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-primary text-white">
            <strong>Formulario de Registro</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('guardar.vista_nota') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="user_id">Estudiante</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                        <option value="">Seleccione un alumno</option>
                        @foreach($alumnos as $alumno)
                            <option value="{{ $alumno->id }}">{{ $alumno->nombre }} {{ $alumno->apellido }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="grado_id">Grado</label>
                    <select name="grado_id" id="grado_id" class="form-control" required>
                        <option value="">Seleccione un grado</option>
                        @foreach($grados as $grado)
                            <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="seccion_id">Sección</label>
                    <select name="seccion_id" id="seccion_id" class="form-control" required>
                        <option value="">Seleccione una sección</option>
                        @foreach($secciones as $seccion)
                            <option value="{{ $seccion->id }}">{{ $seccion->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="curso_id">Curso</label>
                    <select name="curso_id" id="curso_id" class="form-control" required>
                        <option value="">Seleccione un curso</option>
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="competencia_id">Competencia</label>
                    <select name="competencia_id" id="competencia_id" class="form-control" required>
                        <option value="">Seleccione una competencia</option>
                        @foreach($competencias as $competencia)
                            <option value="{{ $competencia->id }}">{{ $competencia->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nota">Nota</label>
                    <input type="number" name="nota" id="nota" class="form-control" min="0" max="20" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Guardar Nota
                </button>
            </form>
        </div>
    </div>
@endsection


