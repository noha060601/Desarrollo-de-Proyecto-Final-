@extends('adminlte::page')

@section('title', 'Evaluación de Actitudes')

@section('content_header')
    <h1>Registro de Actitudes del Estudiante</h1>
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Registro de Evaluación Actitudinal - 2024</h3>
                <form id="filterForm">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label>Grado</label>
                            <select class="form-control" name="grado" id="grado">
                                <option value="1º">1º</option>
                                <option value="2º" selected>2º</option>
                                <option value="3º">3º</option>
                                <option value="4º">4º</option>
                                <option value="5º">5º</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Sección</label>
                            <select class="form-control" name="seccion" id="seccion">
                                <option value="Lambayeque" selected>Lambayeque</option>
                                <option value="Arequipa">Arequipa</option>
                                <option value="Cusco">Cusco</option>
                                <option value="Tacna">Tacna</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Docente</label>
                            <select class="form-control" name="docente" id="docente">
                                <option value="Soto Villavicencio, Vilma" selected>Soto Villavicencio, Vilma</option>
                                <option value="Otro Docente">Otro Docente</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Periodo</label>
                            <select class="form-control" name="periodo" id="periodo">
                                <option value="Bimestre I">Bimestre I</option>
                                <option value="Bimestre II">Bimestre II</option>
                                <option value="Bimestre III">Bimestre III</option>
                                <option value="Bimestre IV">Bimestre IV</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th rowspan="2" class="align-middle">Apellidos y Nombres</th>
                                <th colspan="3">Respeto y Tolerancia</th>
                                <th colspan="3">Responsabilidad</th>
                                <th colspan="3">Participación</th>
                                <th rowspan="2" class="align-middle">Actitud Final</th>
                                <th rowspan="2" class="align-middle">Observaciones</th>
                            </tr>
                            <tr>
                                <th>S1</th>
                                <th>S2</th>
                                <th>Prom</th>
                                <th>S1</th>
                                <th>S2</th>
                                <th>Prom</th>
                                <th>S1</th>
                                <th>S2</th>
                                <th>Prom</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $students = [
                                    "Alata Martínez, Melanie Mariana",
                                    "Andia Dominguez, Karim Adriano",
                                    "Castañeda Cervantes, Kendil Nayumi",
                                    "Castillo Aguilar, Marina Estephany"
                                ];
                            @endphp

                            @foreach($students as $student)
                            <tr>
                                <td>{{ $student }}</td>
                                <!-- Respeto y Tolerancia -->
                                <td><input type="text" class="form-control form-control-sm nota-input" data-type="respeto" data-semestre="1"></td>
                                <td><input type="text" class="form-control form-control-sm nota-input" data-type="respeto" data-semestre="2"></td>
                                <td class="promedio-respeto">-</td>
                                <!-- Responsabilidad -->
                                <td><input type="text" class="form-control form-control-sm nota-input" data-type="responsabilidad" data-semestre="1"></td>
                                <td><input type="text" class="form-control form-control-sm nota-input" data-type="responsabilidad" data-semestre="2"></td>
                                <td class="promedio-responsabilidad">-</td>
                                <!-- Participación -->
                                <td><input type="text" class="form-control form-control-sm nota-input" data-type="participacion" data-semestre="1"></td>
                                <td><input type="text" class="form-control form-control-sm nota-input" data-type="participacion" data-semestre="2"></td>
                                <td class="promedio-participacion">-</td>
                                <!-- Actitud Final -->
                                <td class="actitud-final">-</td>
                                <!-- Observaciones -->
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Observaciones">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" id="btnGuardar">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                    <button class="btn btn-success" id="btnExportar">
                        <i class="fas fa-file-excel"></i> Exportar Excel
                    </button>
                    <button class="btn btn-danger" id="btnPDF">
                        <i class="fas fa-file-pdf"></i> Exportar PDF
                    </button>
                </div>
            </div>
        </div>

        <!-- Leyenda -->
        <div class="card mt-3">
            <div class="card-header">
                <h5>Leyenda de Evaluación Actitudinal</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <p><strong>AD (18-20):</strong> Logro destacado</p>
                    </div>
                    <div class="col-md-3">
                        <p><strong>A (14-17):</strong> Logro esperado</p>
                    </div>
                    <div class="col-md-3">
                        <p><strong>B (11-13):</strong> En proceso</p>
                    </div>
                    <div class="col-md-3">
                        <p><strong>C (0-10):</strong> En inicio</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .table th, .table td {
            text-align: center;
            vertical-align: middle !important;
            font-size: 0.9rem;
        }
        .table input {
            text-align: center;
        }
        .thead-dark th {
            background-color: #343a40;
            color: white;
        }
        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
    </style>
@endsection

@section('js')
<script>
$(document).ready(function() {
    // Calcular promedios al cambiar notas
    $('.nota-input').on('change', function() {
        const row = $(this).closest('tr');
        const type = $(this).data('type');

        // Obtener notas del mismo tipo
        const nota1 = parseFloat(row.find(`[data-type="${type}"][data-semestre="1"]`).val()) || 0;
        const nota2 = parseFloat(row.find(`[data-type="${type}"][data-semestre="2"]`).val()) || 0;

        // Calcular promedio
        const promedio = (nota1 + nota2) / 2;
        row.find(`.promedio-${type}`).text(promedio.toFixed(1));

        // Calcular actitud final
        calcularActitudFinal(row);
    });

    function calcularActitudFinal(row) {
        const promedios = [
            parseFloat(row.find('.promedio-respeto').text()) || 0,
            parseFloat(row.find('.promedio-responsabilidad').text()) || 0,
            parseFloat(row.find('.promedio-participacion').text()) || 0
        ];

        const promedioFinal = promedios.reduce((a, b) => a + b, 0) / promedios.length;
        let actitudFinal = '';

        if (promedioFinal >= 18) actitudFinal = 'AD';
        else if (promedioFinal >= 14) actitudFinal = 'A';
        else if (promedioFinal >= 11) actitudFinal = 'B';
        else actitudFinal = 'C';

        row.find('.actitud-final').text(actitudFinal);
    }

    // Guardar evaluaciones
    $('#btnGuardar').click(function() {
        // Aquí implementar la lógica para guardar en la base de datos
        alert('Guardando evaluaciones...');
    });

    // Exportar a Excel
    $('#btnExportar').click(function() {
        // Aquí implementar la lógica de exportación a Excel
        alert('Exportando a Excel...');
    });

    // Exportar a PDF
    $('#btnPDF').click(function() {
        // Aquí implementar la lógica de exportación a PDF
        alert('Exportando a PDF...');
    });
});
</script>
@endsection
