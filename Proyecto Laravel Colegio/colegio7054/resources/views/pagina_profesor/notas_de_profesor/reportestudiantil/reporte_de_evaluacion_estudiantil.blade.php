@extends('adminlte::page')

@section('title', 'Gestión de registro notas libretas')

@section('content_header')
    <h1>Lista de Alumnos</h1>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Lista de cursos notas libretas</h3>
        <button id="btnGuardar" class="btn btn-primary">Guardar Evaluaciones</button>
        <button id="btnExportar" class="btn btn-success">Exportar a Excel</button>
        <button id="btnPDF" class="btn btn-danger">Exportar a PDF</button>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <label for="curso">Curso</label>
                <select id="curso" name="curso" class="form-control">
                    <option value="educacion_religiosa">Educación Religiosa</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="grado">Grado</label>
                <select id="grado" name="grado" class="form-control">
                    <option value="2">2º</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="seccion">Sección</label>
                <select id="seccion" name="seccion" class="form-control">
                    <option value="Cajamarca">Cajamarca</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="docente">Docente</label>
                <select id="docente" name="docente" class="form-control">
                    <option value="Soto Villavicencio, Vilma">Soto Villavicencio, Vilma</option>
                </select>
            </div>
        </div>

        <br>


            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th rowspan="3">N°</th>
                        <th rowspan="3">Apellidos y Nombres</th>
                        @for ($i = 1; $i <= 4; $i++)
                            <th colspan="6">Competencia {{ $i }}</th>
                        @endfor
                        <th colspan="4">Resumen Bimestral Literal</th>
                    </tr>
                    <tr>
                        @for ($i = 1; $i <= 4; $i++)
                            <!-- Fila de descripción para cada competencia -->
                            <th colspan="6">
                                @if ($i == 1)
                                    CONSTRUYE SU IDENTIDAD
                                @elseif ($i == 2)
                                    CONVIVE Y PARTICIPA DEMOCRÁTICAMENTE EN LA BÚSQUEDA DEL BIEN COMÚN
                                @elseif ($i == 3)
                                   DESARROLLO COGNITIVO Y MATEMATICO
                                @elseif ($i == 4)
                                    <!-- Texto para Competencia 4 -->
                                @endif
                            </th>
                        @endfor
                        <th colspan="4"></th> <!-- Espacio para Resumen Bimestral Literal -->
                    </tr>
                    <tr>
                        @for ($i = 0; $i < 4; $i++)
                            @for ($j = 1; $j <= 5; $j++)
                                <th>S{{ $j }}</th>
                            @endfor
                            <th>NL</th>
                        @endfor
                        <th>C1</th><th>C2</th><th>C3</th><th>C4</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($VistaResumenNotas1 as $index => $alumno)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $alumno->Alumno }}</td>
                        <!-- Notas de Competencias con inputs -->
                        @for ($i = 0; $i < 4; $i++)
                            @for ($j = 1; $j <= 5; $j++)
                                <td><input type="number" class="form-control nota-input" data-type="competencia{{ $i + 1 }}" data-semestre="{{ $j }}"></td>
                            @endfor
                            <td class="promedio-competencia{{ $i + 1 }}">-</td>
                        @endfor
                        <!-- Resumen Bimestral Literal -->
                        <td class="actitud-final">-</td>
                        <td class="actitud-final">-</td>
                        <td class="actitud-final">-</td>
                        <td class="actitud-final">-</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </table>
    </div>
</div>

@endsection
@section('css')
<style>
    .table-responsive {
        overflow-x: auto;
    }
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }
    .table th {
        background-color: #f8f9fa;
    }
    .nota-input {
    width: 60px; /* Ajusta el ancho de los inputs */
    background-color: white; /* Fondo blanco para inputs */
    color: black; /* Color de texto predeterminado */
    }

    .promedio-competencia1, .promedio-competencia2, .promedio-competencia3, .promedio-competencia4, .actitud-final {
        font-weight: bold;
    }
</style>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Validación de rango y restricción de secuencia
        $('.nota-input').on('input', function() {
            const row = $(this).closest('tr');
            const competencia = $(this).data('type'); // Obtiene la competencia (e.g., competencia1, competencia2)
            const semestre = $(this).data('semestre'); // Obtiene el semestre (e.g., S1, S2, ... S5)
            const valor = $(this).val();

            // Validar que solo contenga números y que esté en el rango adecuado
            if (!/^\d*$/.test(valor) || valor > 20) {
                $(this).val(''); // Vacía el campo si el valor no es válido
                alert("Por favor, ingrese un número entre 0 y 20.");
                return;
            }

            // Cambia el color del texto según el valor en lugar del fondo
            if (valor < 11) {
                $(this).css('color', 'red');  // Rojo para notas menores a 11
            } else {
                $(this).css('color', 'blue'); // Azul  para notas iguales o mayores a 11
            }

            // Verificar que se complete una competencia antes de la siguiente
            const competenciaIndex = parseInt(competencia.replace('competencia', '')); // Número de la competencia actual
            if (competenciaIndex > 1) {
                // Revisa si todos los campos de la competencia anterior están llenos
                let prevCompetenciaCompleta = true;
                row.find(`[data-type="competencia${competenciaIndex - 1}"]`).each(function() {
                    if ($(this).val() === '') {
                        prevCompetenciaCompleta = false;
                    }
                });

                // Si no está completa, vacía el campo y muestra una alerta
                if (!prevCompetenciaCompleta) {
                    $(this).val('').css('background-color', ''); // Resetea el campo
                    alert(`Primero complete todos los campos de Competencia ${competenciaIndex - 1} antes de pasar a Competencia ${competenciaIndex}.`);
                    return;
                }
            }
        });

        // Calcular promedios al cambiar notas
        $('.nota-input').on('change', function() {
            const row = $(this).closest('tr');
            const type = $(this).data('type');

            let sumaNotas = 0;
            let contador = 0;

            // Calcular promedio para cada competencia
            for (let i = 1; i <= 5; i++) {
                const nota = parseFloat(row.find(`[data-type="${type}"][data-semestre="${i}"]`).val()) || 0;
                sumaNotas += nota;
                contador++;
            }

            const promedio = sumaNotas / contador;
            row.find(`.promedio-${type}`).text(promedio.toFixed(1));

            // Calcular actitud final
            calcularActitudFinal(row);
        });

        function calcularActitudFinal(row) {
            const promedios = [
                parseFloat(row.find('.promedio-competencia1').text()) || 0,
                parseFloat(row.find('.promedio-competencia2').text()) || 0,
                parseFloat(row.find('.promedio-competencia3').text()) || 0,
                parseFloat(row.find('.promedio-competencia4').text()) || 0
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
            alert('Guardando evaluaciones...');
        });

        // Exportar a Excel
        $('#btnExportar').click(function() {
            alert('Exportando a Excel...');
        });

        // Exportar a PDF
        $('#btnPDF').click(function() {
            alert('Exportando a PDF...');
        });
    });
</script>

@endsection


