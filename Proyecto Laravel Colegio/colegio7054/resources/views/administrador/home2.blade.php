@extends('adminlte::page')

@section('title', 'Gestión de Alumnos')

@section('content_header')
<div class="header-container">
    <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia" class="header-badge">
    <h1 class="sec">Gestión de Capacitación de Docentes</h1>
</div>

@endsection

@section('content')
<div class="card1 shadow-sm">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">Tabla de gestion</h5>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <button class="btn btn-primary" id="add-row-btn">Agregar Docente</button>
            <button class="btn btn-success" id="update-chart-btn">Actualizar Gráficos</button>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered text-center" id="training-table">
                <thead class="bg-primary text-black">
                    <tr>
                        <th>Nombre</th>
                        <th>Capacitación 1</th>
                        <th>Capacitación 2</th>
                        <th>Capacitación 3</th>
                        <th>Capacitación 4</th>
                        <th>Capacitación 5</th>
                        <th>Porcentaje Completo</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Datos iniciales -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card1">
            <div class="card-header">Capacitación Completada</div>
            <div class="card-body">
                <canvas id="completedChart" style="max-height: 300px;"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card1">
            <div class="card-header">Estado General</div>
            <div class="card-body">
                <canvas id="overallChart" style="max-height: 300px;"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Modal para agregar un nuevo registro -->
<div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="addRowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRowModalLabel">Agregar Nuevo Docente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-row-form">
                    <div class="mb-3">
                        <label for="student-name" class="form-label">Nombre del Docente</label>
                        <input type="text" class="form-control" id="student-name" required>
                    </div>
                    @for ($i = 1; $i <= 5; $i++)
                    <div class="mb-3">
                        <label for="cap-{{ $i }}" class="form-label">Capacitación {{ $i }}</label>
                        <select class="form-select" id="cap-{{ $i }}">
                            <option value="0">No capacitado</option>
                            <option value="1">En curso</option>
                            <option value="2">Capacitación completa</option>
                        </select>
                    </div>
                    @endfor
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="save-row-btn">Guardar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .bg-warning {
        background-color: #f81212 !important;
    }

    .bg-info {
        background-color: #f5880b !important;
    }

    .bg-success {
        background-color: #0cf527 !important;
        color: #fff;
    }

    .bg-danger {
        background-color: #f041f9 !important;
        color: #fff;
    }

    .progress {
        height: 20px;
    }

    .progress-bar {
        line-height: 20px;
        font-size: 14px;
    }


.header-container {
    display: flex;
    align-items: center;
    justify-content: center; /* Centra el contenido horizontalmente */
    background-color: #333;
    padding: 20px;
    border-radius: 8px;
    color: #fff;
    margin-bottom: 20px;
    position: relative; /* Para permitir la insignia en el extremo izquierdo */
}

    .header-title {
    font-size: 2em;
    font-weight: bold;
    color: #ff9800;
    font-family: 'Calibri', sans-serif;
    margin: 0;
}

    .header-badge {
    position: absolute;
    left: 20px; /* Posiciona la insignia al extremo izquierdo */
    height: 60px;
}
    /* Estilo del encabezado */
    .sec {
        text-align: center;
        font-family: Arial Black;
        font-size: 90px;
        color: white;
        text-shadow: 7px 6px 0 rgb(4, 1, 1);
        padding: 10px;
        border-radius: 15px;
    }
        .container {

        .badge-warning {
            background-color: #FFC107;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
        }   max-width: 100%;
        }
        .card {
            border-radius: 10px;
            background-color: #2A2A2E;
            color: #FFF;
        }
        .card1 {
            border-radius: 10px;
            background-color: #f3f3f6;
            color: #080808;
        }
</style>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let completedChart, overallChart;

    function updateCharts() {
        const table = document.getElementById('training-table');
        const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

        let completed = 0, inProgress = 0, notTrained = 0;
        let percentages = [];

        Array.from(rows).forEach(row => {
            const cells = row.getElementsByTagName('td');
            const progress = Array.from(cells).slice(1, 6).map(cell => parseInt(cell.innerText));
            const percentage = (progress.filter(p => p === 2).length / 5) * 100;
            percentages.push(percentage);

            completed += progress.filter(p => p === 2).length;
            inProgress += progress.filter(p => p === 1).length;
            notTrained += progress.filter(p => p === 0).length;
        });

        completedChart.data.datasets[0].data = [completed, inProgress, notTrained];
        overallChart.data.labels = Array.from(rows).map(row => row.getElementsByTagName('td')[0].innerText);
        overallChart.data.datasets[0].data = percentages;

        completedChart.update();
        overallChart.update();
    }

    document.addEventListener('DOMContentLoaded', function () {
        completedChart = new Chart(document.getElementById('completedChart'), {
            type: 'pie',
            data: {
                labels: ['Completados', 'En Curso', 'No Capacitados'],
                datasets: [{
                    data: [0, 0, 0],
                    backgroundColor: ['#FFB703', '#FFCAD4', '#A3E635']
                }]
            }
        });

        overallChart = new Chart(document.getElementById('overallChart'), {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Porcentaje Completado',
                    data: [],
                    backgroundColor: '#F76E11'
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            callback: function (value) {
                                return value + '%';
                            }
                        }
                    }
                }
            }
        });

        document.getElementById('add-row-btn').addEventListener('click', function () {
            new bootstrap.Modal(document.getElementById('addRowModal')).show();
        });

        document.getElementById('save-row-btn').addEventListener('click', function () {
            const name = document.getElementById('student-name').value;
            const progress = [
                parseInt(document.getElementById('cap-1').value),
                parseInt(document.getElementById('cap-2').value),
                parseInt(document.getElementById('cap-3').value),
                parseInt(document.getElementById('cap-4').value),
                parseInt(document.getElementById('cap-5').value),
            ];

            const completed = progress.filter(status => status === 2).length;
            const percentage = (completed / 5) * 100;

            const table = document.getElementById('training-table').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
            newRow.innerHTML = `
                <td>${name}</td>
                ${progress.map(status => `
                    <td class="${status === 0 ? 'bg-warning' : status === 1 ? 'bg-info' : 'bg-success'}">${status}</td>
                `).join('')}
                <td>
                    <div class="progress">
                        <div class="progress-bar ${percentage === 100 ? 'bg-success' : percentage >= 50 ? 'bg-info' : percentage > 0 ? 'bg-warning' : 'bg-danger'}"
                             role="progressbar"
                             style="width: ${percentage}%;"
                             aria-valuenow="${percentage}"
                             aria-valuemin="0"
                             aria-valuemax="100">
                             ${percentage}%
                        </div>
                    </div>
                </td>
            `;

            bootstrap.Modal.getInstance(document.getElementById('addRowModal')).hide();
            document.getElementById('add-row-form').reset();
            updateCharts();
        });

        document.getElementById('update-chart-btn').addEventListener('click', updateCharts);
    });
</script>
@endsection


