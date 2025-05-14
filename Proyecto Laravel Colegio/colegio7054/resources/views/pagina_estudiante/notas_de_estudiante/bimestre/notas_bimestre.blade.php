@extends('adminlte::page')

@section('title', 'Gestión de Alumnos')

@section('content_header')
<div class="p-3 bg-dark text-white rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-primary font-weight-bold">Registro de Bimestre </h1>
        <div class="header-actions">
            <button class="btn btn-success" data-toggle="tooltip" title="Nuevo Registro">
                <i class="fas fa-plus-circle"></i> Nuevo Registro
            </button>
            <button class="btn btn-info" data-toggle="tooltip" title="Ver Reportes">
                <i class="fas fa-chart-line"></i> Ver Reportes
            </button>
        </div>
    </div>
    <div class="header-subtitle mt-2">
        <h3 class="text-muted">Administra y Visualiza  las Bimestre de forma fácil y eficiente.</h3>
    </div>
</div>
@endsection

@section('content')

        <div class="card">
            <div class="card-header">
                <h3>Registro del Desarrollo del Nivel de Bimestre por Unidades 2024</h3>

                <!-- Formulario de filtros -->
                <form method="GET" action="{{ route('pagina_estudiante.notas_de_estudiante.bimestre.notas_bimestre') }}">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label>Grado</label>
                            <select class="form-control" name="grado">
                                <option value="">Todos</option>
                                <option value="1º" {{ request('grado') == '1º' ? 'selected' : '' }}>1º</option>
                                <option value="2º" {{ request('grado') == '2º' ? 'selected' : '' }}>2º</option>
                                <option value="3º" {{ request('grado') == '3º' ? 'selected' : '' }}>3º</option>
                                <option value="4º" {{ request('grado') == '4º' ? 'selected' : '' }}>4º</option>
                                <option value="5º" {{ request('grado') == '5º' ? 'selected' : '' }}>5º</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Sección</label>
                            <select class="form-control" name="seccion">
                                <option value="">Todas</option>
                                <option value="Lambayeque" {{ request('seccion') == 'Lambayeque' ? 'selected' : '' }}>Lambayeque</option>
                                <option value="Arequipa" {{ request('seccion') == 'Arequipa' ? 'selected' : '' }}>Arequipa</option>
                                <option value="Cusco" {{ request('seccion') == 'Cusco' ? 'selected' : '' }}>Cusco</option>
                                <option value="Tacna" {{ request('seccion') == 'Tacna' ? 'selected' : '' }}>Tacna</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Docente</label>
                            <select class="form-control" name="docente">
                                <option value="">Todos</option>
                                <option value="Soto Villavicencio, Vilma" {{ request('docente') == 'Soto Villavicencio, Vilma' ? 'selected' : '' }}>Soto Villavicencio, Vilma</option>
                                <!-- Agrega más opciones de docentes si es necesario -->
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Curso</label>
                            <select class="form-control" name="curso">
                                <option value="">Todos</option>
                                <option value="Matemáticas" {{ request('curso') == 'Matemáticas' ? 'selected' : '' }}>Matemáticas</option>
                                <option value="Comunicación" {{ request('curso') == 'Comunicación' ? 'selected' : '' }}>Comunicación</option>
                                <option value="Desarrollo Personal, Ciudadanía y Cívica" {{ request('curso') == 'Desarrollo Personal, Ciudadanía y Cívica' ? 'selected' : '' }}>Desarrollo Personal, Ciudadanía y Cívica</option>
                                <option value="Ciencia y Tecnología" {{ request('curso') == 'Ciencia y Tecnología' ? 'selected' : '' }}>Ciencia y Tecnología</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                            <a href="{{ route('pagina_estudiante.notas_de_estudiante.bimestre.notas_bimestre') }}" class="btn btn-secondary">Limpiar Filtros</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Grado</th>
                            <th>Sección</th>
                            <th>Docente</th>
                            <th>Curso</th>
                            <th>Alumno</th>
                            <th>Nota</th>
                            <th>Promedio Alumno</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datosEstudiantes as $dato)
                        <tr>
                            <td>{{ $dato->Grado }}</td>
                            <td>{{ $dato->Seccion }}</td>
                            <td>{{ $dato->Docente }}</td>
                            <td>{{ $dato->Curso }}</td>
                            <td>{{ $dato->Alumno }}</td>
                            <td>{{ $dato->Nota }}</td>
                            <td>{{ number_format($dato->Promedio_Alumno, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    <button class="btn btn-primary" onclick="window.print()">Imprimir</button>
                    <button class="btn btn-success" onclick="descargarPDF()">Descargar PDF</button>
                </div>
            </div>
        </div>

@endsection

@section('css')
    <style>
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .card-header h3 {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .header-actions button {
        margin-left: 10px;
        font-size: 16px;
        }
        .header-actions i {
            margin-right: 8px;
        }
        .header-subtitle h3 {
            font-size: 18px;
            font-weight: 300;
        }
        .header-subtitle {
            margin-top: 10px;
        }
    </style>
@endsection

@section('js')
    <script>
        function descargarPDF() {
            alert('Función de descarga de PDF aún no implementada');
        }
        $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
@endsection

