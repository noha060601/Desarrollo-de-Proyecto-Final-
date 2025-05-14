@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Lista de Actividades </h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de Actividades </h3>
    </div>

    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <input type="checkbox"> Diseñar un tema atractivo
                </span>
                <span class="badge bg-danger">2 mins</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <input type="checkbox"> Hacer el tema responsive
                </span>
                <span class="badge bg-primary">4 horas</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <input type="checkbox"> Mejorar el tema
                </span>
                <span class="badge bg-warning">1 día</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <input type="checkbox"> Revisar mensajes y notificaciones
                </span>
                <span class="badge bg-info">1 semana</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <input type="checkbox"> Organizar archivos
                </span>
                <span class="badge bg-success">3 días</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <input type="checkbox"> Realizar copias de seguridad
                </span>
                <span class="badge bg-secondary">1 mes</span>
            </li>
        </ul>
    </div>

    <div class="card-footer d-flex justify-content-between align-items-center">

        <button class="btn btn-primary" data-toggle="modal" data-target="#addTaskModal">+ Add Item</button>
    </div>
</div>

<div class="card ">
    <div class="card-body">
        <h5>Progreso de Tareas</h5>
        <canvas id="tasksChart"></canvas>
    </div>
</div>


<!-- Modal para agregar tarea -->
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form >

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Add Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Task Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="due_time">Due Time</label>
                        <select class="form-control" id="due_time" name="due_time">
                            <option value="2 mins">2 mins</option>
                            <option value="4 hours">4 hours</option>
                            <option value="1 day">1 day</option>
                            <option value="3 days">3 days</option>
                            <option value="1 week">1 week</option>
                            <option value="1 month">1 month</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Task</button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('To Do List loaded!'); </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Configuración del gráfico de barras
        const ctx = document.getElementById('tasksChart').getContext('2d');
        const tasksChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Completadas', 'Pendientes'],
                datasets: [{
                    label: 'Cantidad de Tareas',
                    data: [{{"12,18,15,25,,79"  }}, {{"10,,20,30,40,50 "}}],
                    backgroundColor: ['#4CAF50', '#FF5733'],
                    borderColor: ['#388E3C', '#C0392B'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@stop



