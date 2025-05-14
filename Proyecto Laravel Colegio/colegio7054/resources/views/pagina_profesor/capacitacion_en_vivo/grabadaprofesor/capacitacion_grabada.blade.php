@extends('adminlte::page')

@section('title', 'Clases Grabadas')

@section('content_header')
    <div class="header-container">
        <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia" class="header-badge">
        <h1 class="sec">CAPACITACIONES GRABADAS</h1>
    </div>
@endsection

@section('content')
    <div class="info-box">
        <p>En esta sección podrás observar y descargar las sesiones de capacitación ya pasadas. Puedes filtrar las sesiones por curso y fecha para facilitar la búsqueda. ¡Suerte en tus capacitaciones!</p>
    </div>

    <div class="filters">
        <label for="filterCourse">Filtrar por capacitación:</label>
        <select id="filterCourse" class="form-select">
            <option value="all">Todas</option>
            <option value="uso_tecnologias">Uso de tecnologías en el aula</option>
            <option value="gestion_aula">Gestión de aula</option>
            <option value="evaluacion_digital">Evaluación digital</option>
            <option value="herramientas_google">Herramientas de Google para la educación</option>
            <option value="inclusion_educativa">Inclusión educativa</option>
            <option value="planificacion_curricular">Planificación curricular</option>
        </select>

        <label for="filterDate">Filtrar por fecha:</label>
        <input type="date" id="filterDate" class="form-select">

        <button id="searchButton" class="btn btn-primary">Buscar</button>
        <button id="clearFiltersButton" class="btn btn-secondary">Borrar filtros</button>
    </div>

    <div class="recording-container">
        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Sesión</th>
                        <th>Tipo</th>
                        <th>Fecha y Hora</th>
                        <th>Tema de Capacitación</th>
                        <th>Ambiente</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="recordingTable">
                    @for($i = 1; $i <= 15; $i++)
                    <tr data-course="uso_tecnologias" data-date="{{ date('Y-m-d', strtotime("2024-10-$i")) }}">
                        <td>{{ $i }}</td>
                        <td><span class="badge bg-success">GRABADA</span></td>
                        <td>{{ date('d/m/Y', strtotime("2024-10-$i")) }} 14:00 a 17:00</td>
                        <td>
                            @php
                                $topics = [
                                    'Uso de tecnologías en el aula',
                                    'Gestión de aula',
                                    'Evaluación digital',
                                    'Herramientas de Google para la educación',
                                    'Inclusión educativa',
                                    'Planificación curricular'
                                ];
                                echo $topics[array_rand($topics)];
                            @endphp
                        </td>
                        <td>Sala Zoom</td>
                        <td>
                            <a href="ruta/a/la/grabacion_{{ $i }}.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                                <i class="fas fa-play-circle"></i> Ver grabación
                            </a>
                            <a href="ruta/a/descarga_{{ $i }}.mp4" class="btn btn-outline-success btn-sm" download>
                                <i class="fas fa-download"></i> Descargar
                            </a>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <div class="pagination-container">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('css')
    <style>
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

        .info-box {
            background-color: #444;
            color: #eee;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .filters {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
        }
        .form-select, #searchButton, #clearFiltersButton {
            padding: 8px;
            border-radius: 5px;
        }
        .recording-container {
            background-color: #222;
            padding: 15px;
            border-radius: 8px;
        }
        .table {
            color: #fff;
        }
        .badge {
            font-size: 0.9em;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .btn-outline-primary, .btn-outline-success {
            color: #fff;
            border: 1px solid transparent;
        }
        .btn-outline-primary {
            border-color: #007bff;
            color: #007bff;
        }
        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }
        .btn-outline-success {
            border-color: #28a745;
            color: #28a745;
        }
        .btn-outline-success:hover {
            background-color: #28a745;
            color: #fff;
        }
        .pagination-container {
            margin-top: 15px;
            text-align: center;
        }
        .pagination .page-link {
            color: #fff;
            background-color: #444;
            border: 1px solid #555;
        }
        .pagination .page-item.active .page-link {
            background-color: #ff9800;
            border-color: #ff9800;
        }

    </style>
@endsection

@section('js')
    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            const selectedCourse = document.getElementById('filterCourse').value;
            const selectedDate = document.getElementById('filterDate').value;
            const rows = document.querySelectorAll('#recordingTable tr');

            rows.forEach(row => {
                const rowCourse = row.getAttribute('data-course');
                const rowDate = row.getAttribute('data-date');

                const courseMatch = (selectedCourse === 'all' || rowCourse === selectedCourse);
                const dateMatch = (!selectedDate || rowDate === selectedDate);

                if (courseMatch && dateMatch) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        document.getElementById('clearFiltersButton').addEventListener('click', function() {
            document.getElementById('filterCourse').value = 'all';
            document.getElementById('filterDate').value = '';
            const rows = document.querySelectorAll('#recordingTable tr');
            rows.forEach(row => row.style.display = '');
        });

        // Funcionalidad para ver grabación
        document.querySelectorAll('.btn-outline-primary').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado
                const recordingUrl = this.href; // Obtener la URL de grabación
                window.open(recordingUrl, '_blank'); // Abrir en una nueva pestaña
            });
        });

        // Funcionalidad para descargar
        document.querySelectorAll('.btn-outline-success').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado
                const downloadUrl = this.href; // Obtener la URL de descarga
                const a = document.createElement('a'); // Crear un nuevo elemento <a>
                a.href = downloadUrl; // Asignar la URL de descarga
                a.download = ''; // Indicar que se debe descargar
                document.body.appendChild(a); // Añadir el elemento al DOM
                a.click(); // Simular un clic
                document.body.removeChild(a); // Eliminar el elemento del DOM
            });
        });
    </script>
@endsection
