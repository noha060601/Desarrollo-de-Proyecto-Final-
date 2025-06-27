
@extends('adminlte::page')

@section('title', 'Registro de Notas de Alumnos')

@section('content_header')
    <div class="card shadow-sm mb-4 p-4 text-white" style="background: linear-gradient(90deg, #007bff, #6610f2);">
        <div class="card-body p-0">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h2 class="mb-0">
                    <i class="fas fa-graduation-cap me-2"></i>
                    Registro de Notas por Competencia
                </h2>
                <small class="text-light">🗓️ Año escolar actual  {{ now()->format('d/m/Y') }}</small>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body py-3">
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="fw-bold">Grado</label>
                    <select id="filtro_grado" class="form-control form-control-sm">
                        <option value="">Todos</option>
                        @for($i = 1; $i <= 6; $i++)
                            <option value="{{ $i }}°">{{ $i }}° Primaria</option>
                        @endfor
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="fw-bold">Sección</label>
                    <select id="filtro_seccion" class="form-control form-control-sm">
                        <option value="">Todas</option>
                        <option value="A">Sección A</option>
                        <option value="B">Sección B</option>
                        <option value="C">Sección C</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="fw-bold">Curso</label>
                    <select id="filtro_curso" class="form-control form-control-sm">
                        <option value="">Todos</option>
                        <option value="Matemática">Matemática</option>
                        <option value="Comunicación">Comunicación</option>
                        <option value="Ciencia y Tecnología">Ciencia y Tecnología</option>
                        <option value="Personal Social">Personal Social</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="fw-bold">Buscar Alumno</label>
                    <input type="text" id="buscar_alumno" class="form-control form-control-sm" placeholder="Nombre del alumno...">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12 text-end">
                    <button type="button" id="limpiar_filtros" class="btn btn-sm btn-outline-light text-white border-white">
                        <i class="fas fa-broom"></i> Limpiar Filtros
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-primary text-white">
            <strong>Registro de Notas de Alumnos</strong>
        </div>
        
        <!-- Filtros en el encabezado -->
        
        <div class="card-body">
            <form >
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tabla_alumnos">
                        <thead class="bg-secondary">
                            <tr>
                                <th width="5%">Sel.</th>
                                <th width="20%">Alumno</th>
                                <th width="5%">Grado</th>
                                <th width="10%">Sección</th>
                                <th width="10%">Curso</th>
                                <th width="10%">Competencia</th>
                                <th width="10%">Bimestre 1</th>
                                <th width="10%">Bimestre 2</th>
                                <th width="10%">Bimestre 3</th>
                                <th width="10%">Promedio General</th>
                                <th width="15%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Fila 1 -->
                            <tr data-grado="3°" data-seccion="A" data-curso="Matemática" data-alumno="juan pérez">
                                <td>
                                    <input type="radio" name="alumno_competencia" value="1_1" required>
                                    <input type="hidden" name="alumno_id" value="1">
                                    <input type="hidden" name="competencia_id" value="1">
                                </td>
                                <td><strong>Juan Pérez</strong></td>
                                <td><span class="badge badge-info">3°</span></td>
                                <td><span class="badge badge-primary">A</span></td>
                                <td>Matemática</td>
                                <td>Resuelve problemas de cantidad</td>
                                <td><input type="number" name="b1" class="form-control form-control-sm nota-bimestre" min="0" max="20" step="0.1" placeholder="0-20" disabled></td>
                                <td><input type="number" name="b2" class="form-control form-control-sm nota-bimestre" min="0" max="20" step="0.1" placeholder="0-20" disabled></td>
                                <td><input type="number" name="b3" class="form-control form-control-sm nota-bimestre" min="0" max="20" step="0.1" placeholder="0-20" disabled></td>
                                <td><span class="badge badge-success promedio">0.0</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="submit" class="btn btn-sm btn-success btn-guardar me-1" >
                                            <i class="fas fa-save me-1"></i> Guardar
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning btn-modificar me-1">
                                            <i class="fas fa-edit me-1"></i> Modificar
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger btn-eliminar">
                                            <i class="fas fa-trash me-1"></i> Eliminar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
                $(document).ready(function() {
                    // Función para filtrar la tabla
                    function filtrarTabla() {
                        const filtroGrado = $('#filtro_grado').val().toLowerCase();
                        const filtroSeccion = $('#filtro_seccion').val().toLowerCase();
                        const filtroCurso = $('#filtro_curso').val().toLowerCase();
                        const buscarAlumno = $('#buscar_alumno').val().toLowerCase();
                        
                        $('#tabla_alumnos tbody tr').each(function() {
                            const fila = $(this);
                            const grado = fila.data('grado').toString().toLowerCase();
                            const seccion = fila.data('seccion').toString().toLowerCase();
                            const curso = fila.data('curso').toString().toLowerCase();
                            const alumno = fila.data('alumno').toString().toLowerCase();
                            
                            let mostrar = true;
                            
                            // Aplicar filtros
                            if (filtroGrado && !grado.includes(filtroGrado)) mostrar = false;
                            if (filtroSeccion && !seccion.includes(filtroSeccion)) mostrar = false;
                            if (filtroCurso && !curso.includes(filtroCurso)) mostrar = false;
                            if (buscarAlumno && !alumno.includes(buscarAlumno)) mostrar = false;
                            
                            if (mostrar) {
                                fila.show();
                            } else {
                                fila.hide();
                                // Desmarcar radio button si la fila se oculta
                                fila.find('input[type="radio"]').prop('checked', false);
                            }
                        });
                        
                        // Verificar si hay filas visibles
                        const filasVisibles = $('#tabla_alumnos tbody tr:visible').length;
                        if (filasVisibles === 0) {
                            if ($('#no-results').length === 0) {
                                $('#tabla_alumnos tbody').append(
                                    '<tr id="no-results"><td colspan="8" class="text-center text-muted">' +
                                    '<i class="fas fa-search"></i> No se encontraron resultados con los filtros aplicados</td></tr>'
                                );
                            }
                        } else {
                            $('#no-results').remove();
                        }
                    }
                    
                    // Eventos de filtrado
                    $('#filtro_grado, #filtro_seccion, #filtro_curso').on('change', filtrarTabla);
                    $('#buscar_alumno').on('keyup', filtrarTabla);
                    
                    // Limpiar filtros
                    $('#limpiar_filtros').on('click', function() {
                        $('#filtro_grado, #filtro_seccion, #filtro_curso').val('');
                        $('#buscar_alumno').val('');
                        filtrarTabla();
                    });
                    
                    // Habilitar/deshabilitar el campo de nota y botón guardar
                    $('input[name="alumno_competencia"]').on('change', function() {
                        // Deshabilitar todos los campos de nota
                        $('input[name="nota"]').prop('disabled', true).val('');
                        $('#btn_guardar').prop('disabled', true);
                        
                        // Habilitar solo el campo de nota de la fila seleccionada
                        const filaSeleccionada = $(this).closest('tr');
                        filaSeleccionada.find('input[name="nota"]').prop('disabled', false).focus();
                        $('#btn_guardar').prop('disabled', false);
                    });
                    
                    // Validar nota antes de enviar
                    $('form').on('submit', function(e) {
                        const notaInput = $('input[name="nota"]:not(:disabled)');
                        const nota = parseFloat(notaInput.val());
                        
                        if (isNaN(nota) || nota < 0 || nota > 20) {
                            e.preventDefault();
                            alert('Por favor ingrese una nota válida entre 0 y 20');
                            notaInput.focus();
                            return false;
                        }
                    });
                    
                    // Colorear notas según rango
                    function colorearNotas() {
                        $('.badge').each(function() {
                            const nota = parseFloat($(this).text());
                            if (!isNaN(nota)) {
                                $(this).removeClass('badge-success badge-warning badge-danger');
                                if (nota >= 14) {
                                    $(this).addClass('badge-success');
                                } else if (nota >= 11) {
                                    $(this).addClass('badge-warning');
                                } else {
                                    $(this).addClass('badge-danger');
                                }
                            }
                        });
                    }
                    
                    // Aplicar colores al cargar
                    colorearNotas();
                });
                $(document).ready(function () {
                    
            // Habilitar inputs al seleccionar alumno
            $('input[name="alumno_competencia"]').on('change', function () {
                const fila = $(this).closest('tr');
                fila.find('input[type="number"]').prop('disabled', false);
            })
        });

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.nota-bimestre').forEach(input => {
                input.addEventListener('input', function () {
                    let valor = parseFloat(this.value);

                    if (valor > 20) {
                        this.value = 20;
                    } else if (valor < 0 && this.value !== '') {
                        this.value = 0;
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            // Activar inputs cuando se presiona el botón "Modificar Nota"
            $('#btn_modificar').on('click', function () {
                $('.nota-bimestre').prop('disabled', false);
            });

            // Calcular promedio automáticamente al cambiar alguna nota
            $('#tabla_alumnos').on('input', '.nota-bimestre', function () {
                const fila = $(this).closest('tr');

                const b1 = parseFloat(fila.find('input[name="b1"]').val()) || 0;
                const b2 = parseFloat(fila.find('input[name="b2"]').val()) || 0;
                const b3 = parseFloat(fila.find('input[name="b3"]').val()) || 0;

                const promedio = ((b1 + b2 + b3) / 3).toFixed(1);
                const $badge = fila.find('.promedio');

                // Cambiar color del badge
                $badge.removeClass('badge-success badge-warning badge-danger');

                if (isNaN(promedio)) {
                    $badge.text('-');
                } else {
                    $badge.text(promedio);

                    if (promedio >= 14) {
                        $badge.addClass('badge-success');
                    } else if (promedio >= 11) {
                        $badge.addClass('badge-warning');
                    } else {
                        $badge.addClass('badge-danger');
                    }
                }
            });
        });
    </script>




   
@endsection

@section('css')
<style>
.card-body.bg-light {
    background-color: #f8f9fa !important;
    border-bottom: 1px solid #dee2e6;
}

.table th {
    background-color: #6c757d !important;
    color: white !important;
    font-size: 0.9rem;
    text-align: center;
}

.table td {
    vertical-align: middle;
    font-size: 0.9rem;
}

.form-control-sm {
    font-size: 0.875rem;
}

.badge {
    font-size: 0.8rem;
}

#tabla_alumnos tbody tr:hover {
    background-color: #f5f5f5;
}

.alert-info {
    border-left: 4px solid #17a2b8;
}

@media (max-width: 768px) {
    .table-responsive {
        font-size: 0.8rem;
    }
    
    .btn-lg {
        padding: 0.5rem 1rem;
        font-size: 1rem;
    }
}
</style>
@endsection