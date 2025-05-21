@extends('adminlte::page')
@section('title', 'Gestión de Reservas de Áreas')
@section('content_header')
<div class="header-container">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia" class="header-badge">
    <h1 class="sec">"RESERVA DE ÁREAS Y RECURSOS TECNOLÓGICOS"</h1>
</div>
@endsection

@section('content')
<div class="row">
    <!-- Card para los filtros -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Filtrar Reservas</h5>
            </div>
            <div class="card-body">
                <div class="row align-items-end">
                    <div class="col-md-3">
                        <label for="area">Área:</label>
                        <select class="form-control" id="area">
                            <option value="">Seleccionar área</option>
                            <option value="1">Auditorio</option>
                            <option value="2">Laboratorio</option>
                            <option value="3">Sala de conferencias</option>
                        </select>
                    </div>
                   <div class="col-md-3">
                        <label for="fecha">Fecha:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" readonly>
                    </div>
                    <div class="col-md-3 d-flex">
                        <button class="btn btn-primary mx-1">Buscar</button>
                        <button class="btn btn-warning mx-1" id="limpiarFiltros">Borrar filtros</button>
                        <button class="btn btn-success mx-1" data-toggle="modal" data-target="#modalReserva">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card para la lista de reservas -->
    <div class="col-md-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h5>Lista de Reservas</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Área</th>
                            <th>Fecha</th>
                            <th>Hora de Inicio</th>
                            <th>Hora de Fin</th>
                            <th>Reservado por</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tabla-reservas">
                        <!-- Filas dinámicas -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Reservar -->
<div class="modal fade" id="modalReserva" tabindex="-1" role="dialog" aria-labelledby="modalReservaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReservaLabel">Área de Reservar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-reserva">
                    <div class="form-group">
                        <label for="modalArea">Área:</label>
                        <select class="form-control" id="modalArea">
                            <option value="">Seleccionar área</option>
                            <option value="Auditorio">Auditorio</option>
                            <option value="Laboratorio">Laboratorio</option>
                            <option value="Sala de conferencias">Sala de conferencias</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modalFecha">Fecha:</label>
                        <input type="date" class="form-control" id="modalFecha">
                    </div>
                    <div class="form-group">
                        <label for="modalHoraInicio">Hora de Inicio:</label>
                        <input type="time" class="form-control" id="modalHoraInicio">
                    </div>
                    <div class="form-group">
                        <label for="modalHoraFin">Hora de Fin:</label>
                        <input type="time" class="form-control" id="modalHoraFin">
                    </div>
                    <div class="form-group">
                        <label for="modalUsuario">Reservado por:</label>
                        <input type="text" class="form-control" id="modalUsuario">
                    </div>
                    <div class="alert alert-danger d-none" id="mensajeError">El área ya está reservada en este horario.</div>
                    <button type="button" class="btn btn-primary" id="guardarReserva">Guardar</button>
                    <button type="button" class="btn btn-danger" id="eliminarReservaModal">Borrar Formulario</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .header-container {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #333;
        padding: 20px;
        border-radius: 8px;
        color: #fff;
        margin-bottom: 20px;
        position: relative;
    }
    .sec {
        text-align: center;
        font-family: Arial Black;
        font-size: 90px;
        color: white;
        text-shadow: 5px 5px 0 rgb(8, 8, 8);
        padding: 15px;
        border-radius: 8px;
    }
    .header-badge {
        position: absolute;
        left: 20px;
        height: 60px;
    }
    .table-striped th, .table-striped td {
        text-align: center;
    }
    .table-striped th {
        background-color: #343a40;
        color: #fff;
    }
    .btn {
        font-size: 14px;
    }
    .align-items-end {
        display: flex;
        align-items: flex-end;
    }
    .mt-3 {
        margin-top: 1rem !important;
    }
    .mx-1 {
        margin: 0 0.25rem !important;
    }
    .mb-2 {
        margin-bottom: 0.5rem !important;
    }
    .d-none {
        display: none !important;
    }
</style>
@endsection

@section('js')
<script>
    let contadorReservas = 1; // Contador para IDs de reservas
    const limiteReservas = 15; // Límite de registros en la tabla principal
    let reservaEditando = null; // Variable para almacenar la reserva que se está editando

    // Guardar nueva reserva
    document.getElementById('guardarReserva').addEventListener('click', function () {
        const area = document.getElementById('modalArea').value;
        const fecha = document.getElementById('modalFecha').value;
        const horaInicio = document.getElementById('modalHoraInicio').value;
        const horaFin = document.getElementById('modalHoraFin').value;
        const usuario = document.getElementById('modalUsuario').value;
        const mensajeError = document.getElementById('mensajeError');

        // Validar que todos los campos estén completos
        if (!area || !fecha || !horaInicio || !horaFin || !usuario) {
            alert('Por favor, completa todos los campos.');
            return;
        }

        // Verificar si el área ya está ocupada
        const filas = document.querySelectorAll('#tabla-reservas tr');
        for (const fila of filas) {
            const filaArea = fila.cells[1]?.textContent;
            const filaFecha = fila.cells[2]?.textContent;
            const filaHoraInicio = fila.cells[3]?.textContent;

            if (filaArea === area && filaFecha === fecha && filaHoraInicio === horaInicio) {
                mensajeError.classList.remove('d-none');
                return;
            }
        }

        // Si no hay conflictos, agregar o actualizar la reserva
        mensajeError.classList.add('d-none');

        // Si es una edición, actualizamos la reserva
        if (reservaEditando) {
            reservaEditando.cells[1].textContent = area;
            reservaEditando.cells[2].textContent = fecha;
            reservaEditando.cells[3].textContent = horaInicio;
            reservaEditando.cells[4].textContent = horaFin;
            reservaEditando.cells[5].textContent = usuario;
        } else {
            const nuevaFila = `
                <tr>
                    <td>${contadorReservas}</td>
                    <td>${area}</td>
                    <td>${fecha}</td>
                    <td>${horaInicio}</td>
                    <td>${horaFin}</td>
                    <td>${usuario}</td>
                    <td>
                        <button class="btn btn-success btn-sm editarReserva">Editar</button>
                        <button class="btn btn-danger btn-sm eliminarReserva">Eliminar</button>
                    </td>
                </tr>
            `;
            document.querySelector('#tabla-reservas').insertAdjacentHTML('beforeend', nuevaFila);
            contadorReservas++;
        }

        // Limpiar el formulario y cerrar el modal
        document.getElementById('form-reserva').reset();
        $('#modalReserva').modal('hide');
        reservaEditando = null;
    });

    // Manejar edición de reservas
    document.querySelector('#tabla-reservas').addEventListener('click', function (e) {
        if (e.target.classList.contains('editarReserva')) {
            const fila = e.target.closest('tr');
            reservaEditando = fila;
            document.getElementById('modalArea').value = fila.cells[1].textContent;
            document.getElementById('modalFecha').value = fila.cells[2].textContent;
            document.getElementById('modalHoraInicio').value = fila.cells[3].textContent;
            document.getElementById('modalHoraFin').value = fila.cells[4].textContent;
            document.getElementById('modalUsuario').value = fila.cells[5].textContent;
            $('#modalReserva').modal('show');
            document.getElementById('guardarReserva').textContent = 'Actualizar';
        }

        // Eliminar una reserva
        if (e.target.classList.contains('eliminarReserva')) {
            const fila = e.target.closest('tr');
            fila.remove();
            contadorReservas--;
        }
    });

    // Limpiar filtros
    document.getElementById('limpiarFiltros').addEventListener('click', function () {
        document.getElementById('area').value = '';
        document.getElementById('fecha').value = '';
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hoy = new Date().toISOString().split('T')[0];
        document.getElementById('fecha').value = hoy;
    });
</script>
@endsection
