@extends('adminlte::page')

@section('title', 'Historial de Capacitaciones')

@section('content_header')

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Lista de Capacitaciones</h3>
        </div>
        <div class="card-body">
            <!-- Filtros para seleccionar capacitación y fecha -->
            <form class="mb-4" id="filterForm">
                <div class="row">
                    <!-- Select para nombre de la capacitación -->
                    <div class="col-md-6">
                        <label for="capacitacion" class="form-label">Nombre de la Capacitación</label>
                        <select class="form-control" id="capacitacion" name="capacitacion">
                            <option value="">Seleccionar...</option>
                            <option value="Capacitación semana 1">Capacitación semana 1</option>
                            <option value="Capacitación semana 2">Capacitación semana 2</option>
                            <option value="Capacitación semana 3">Capacitación semana 3</option>
                            <option value="Capacitación semana 4">Capacitación semana 4</option>
                            <option value="Capacitación semana 5">Capacitación semana 5</option>
                            <option value="Capacitación semana 6">Capacitación semana 6</option>
                            <option value="Capacitación semana 7">Capacitación semana 7</option>
                        </select>
                    </div>
                    <!-- Input para la fecha -->
                    <div class="col-md-6">
                        <label for="fecha" class="form-label">Fecha de la Capacitación</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                </div>
                <button type="button" class="btn btn-primary mt-3" onclick="filtrarCapacitaciones()">Filtrar</button>
                <button type="button" class="btn btn-secondary mt-3" onclick="borrarFiltros()">Borrar Filtros</button>
            </form>

            <!-- Tabla de historial de capacitaciones -->
            <table class="table table-bordered table-striped" id="tablaCapacitaciones">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre de la Capacitación</th>
                        <th>Fecha</th>
                        <th>Duración</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Datos de ejemplo en la tabla -->
                    <tr>
                        <td>1</td>
                        <td>Capacitación semana 1</td>
                        <td>2024-01-15</td>
                        <td>2 horas</td>
                        <td>Introducción a la enseñanza en línea.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Capacitación semana 2</td>
                        <td>2024-03-20</td>
                        <td>3 horas</td>
                        <td>Técnicas avanzadas de evaluación.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Capacitación semana 3</td>
                        <td>2024-05-10</td>
                        <td>1 hora</td>
                        <td>Uso de recursos digitales en el aula.</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Capacitación semana 4</td>
                        <td>2024-05-10</td>
                        <td>3 horas</td>
                        <td>Uso de recursos informativos.</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Capacitación semana 5</td>
                        <td>2024-05-10</td>
                        <td>4 horas</td>
                        <td>Uso de recursos de aprendizaje.</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Capacitación semana 6</td>
                        <td>2024-05-10</td>
                        <td>5 horas</td>
                        <td>Uso de recursos digitales en el aula.</td>
                    </tr>
                </tbody>
            </table>

            <!-- Botones de acción -->
            <div class="mt-3 text-right">
                <button class="btn btn-primary" onclick="descargarPDF()">Descargar PDF</button>
                <button class="btn btn-secondary" onclick="window.print()">Imprimir</button>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .btn-primary, .btn-secondary {
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>
@endsection

@section('js')
    <script>
        function filtrarCapacitaciones() {
            const selectCapacitacion = document.getElementById("capacitacion");
            const inputFecha = document.getElementById("fecha");
            const tabla = document.getElementById("tablaCapacitaciones");
            const filas = tabla.getElementsByTagName("tbody")[0].getElementsByTagName("tr");

            const capacitacionValor = selectCapacitacion.value;
            const fechaValor = inputFecha.value;

            for (let i = 0; i < filas.length; i++) {
                const fila = filas[i];
                const nombreCapacitacion = fila.cells[1].innerText;
                const fechaCapacitacion = fila.cells[2].innerText;

                const mostrarFila = (capacitacionValor === "" || nombreCapacitacion === capacitacionValor) &&
                                   (fechaValor === "" || fechaCapacitacion === fechaValor);

                fila.style.display = mostrarFila ? "" : "none";
            }
        }

        function borrarFiltros() {
            document.getElementById("capacitacion").value = ""; // Resetea el select
            document.getElementById("fecha").value = ""; // Resetea el input de fecha
            filtrarCapacitaciones(); // Vuelve a mostrar todas las capacitaciones
        }

        function descargarPDF() {
            // Aquí puedes agregar código para descargar el historial como PDF
            alert("Función de descarga PDF en desarrollo.");
        }
    </script>
@endsection
