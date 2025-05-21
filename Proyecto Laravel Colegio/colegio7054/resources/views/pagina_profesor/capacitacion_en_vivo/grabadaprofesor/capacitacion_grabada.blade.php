<!-- pagina corregida con formato  -->
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
                    <th>#</th>
                    <th>Estado</th>
                    <th>Fecha y Hora</th>
                    <th>Curso</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="recordingTable">
                <!-- Uso de tecnologías en el aula -->
                <tr data-course="uso_tecnologias" data-date="2024-09-10">
                    <td>1</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>10/09/2024 09:00 a 11:30</td>
                    <td>Uso de tecnologías en el aula</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_1.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_1.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="gestion_aula" data-date="2024-09-12">
                    <td>2</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>12/09/2024 10:00 a 12:30</td>
                    <td>Gestión del aula y manejo de grupos</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_2.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_2.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="herramientas_google" data-date="2024-09-14">
                    <td>3</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>14/09/2024 08:30 a 10:00</td>
                    <td>Herramientas de Google para el aula</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_3.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_3.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="inclusion_educativa" data-date="2024-09-17">
                    <td>4</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>17/09/2024 11:00 a 13:00</td>
                    <td>Inclusión educativa y diversidad</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_4.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_4.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="planificacion_curricular" data-date="2024-09-19">
                    <td>5</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>19/09/2024 09:30 a 11:00</td>
                    <td>Planificación curricular para docentes</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_5.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_5.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>




                <tr data-course="uso_tecnologias" data-date="2024-09-10">
                    <td>6</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>10/09/2024 09:00 a 11:30</td>
                    <td>Uso de tecnologías en el aula</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_1.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_1.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="gestion_aula" data-date="2024-09-12">
                    <td>7</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>12/09/2024 10:00 a 12:30</td>
                    <td>Gestión del aula y manejo de grupos</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_2.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_2.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="herramientas_google" data-date="2024-09-14">
                    <td>8</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>14/09/2024 08:30 a 10:00</td>
                    <td>Herramientas de Google para el aula</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_3.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_3.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="inclusion_educativa" data-date="2024-09-17">
                    <td>9</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>17/09/2024 11:00 a 13:00</td>
                    <td>Inclusión educativa y diversidad</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_4.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_4.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="planificacion_curricular" data-date="2024-09-19">
                    <td>10</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>19/09/2024 09:30 a 11:00</td>
                    <td>Planificación curricular para docentes</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_5.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_5.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>


                <tr data-course="uso_tecnologias" data-date="2024-09-10">
                    <td>11</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>10/09/2024 09:00 a 11:30</td>
                    <td>Uso de tecnologías en el aula</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_1.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_1.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="gestion_aula" data-date="2024-09-12">
                    <td>12</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>12/09/2024 10:00 a 12:30</td>
                    <td>Gestión del aula y manejo de grupos</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_2.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_2.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="herramientas_google" data-date="2024-09-14">
                    <td>13</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>14/09/2024 08:30 a 10:00</td>
                    <td>Herramientas de Google para el aula</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_3.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_3.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="inclusion_educativa" data-date="2024-09-17">
                    <td>14</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>17/09/2024 11:00 a 13:00</td>
                    <td>Inclusión educativa y diversidad</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_4.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_4.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="planificacion_curricular" data-date="2024-09-19">
                    <td>15</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>19/09/2024 09:30 a 11:00</td>
                    <td>Planificación curricular para docentes</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_5.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_5.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>



                <tr data-course="uso_tecnologias" data-date="2024-09-10">
                    <td>16</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>10/09/2024 09:00 a 11:30</td>
                    <td>Uso de tecnologías en el aula</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_1.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_1.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="gestion_aula" data-date="2024-09-12">
                    <td>17</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>12/09/2024 10:00 a 12:30</td>
                    <td>Gestión del aula y manejo de grupos</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_2.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_2.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="herramientas_google" data-date="2024-09-14">
                    <td>18</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>14/09/2024 08:30 a 10:00</td>
                    <td>Herramientas de Google para el aula</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_3.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_3.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="inclusion_educativa" data-date="2024-09-17">
                    <td>19</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>17/09/2024 11:00 a 13:00</td>
                    <td>Inclusión educativa y diversidad</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_4.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_4.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>

                <tr data-course="planificacion_curricular" data-date="2024-09-19">
                    <td>20</td>
                    <td><span class="badge bg-success">GRABADA</span></td>
                    <td>19/09/2024 09:30 a 11:00</td>
                    <td>Planificación curricular para docentes</td>
                    <td>Sala Zoom</td>
                    <td>
                        <a href="ruta/a/la/grabacion_5.mp4" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-play-circle"></i> Ver grabación
                        </a>
                        <a href="ruta/a/descarga_5.mp4" class="btn btn-outline-success btn-sm" download>
                            <i class="fas fa-download"></i> Descargar
                        </a>
                    </td>
                </tr>




            </tbody>
        </table>

        <!-- Paginación -->
        <div id="pagination" class="d-flex justify-content-center">
            <button class="btn btn-outline-secondary" id="prevBtn" disabled>Anterior</button>
            <span id="pageNumbers" class="mx-3"></span>
            <button class="btn btn-outline-secondary" id="nextBtn">Siguiente</button>
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
        .header-title {
            font-size: 2em;
            font-weight: bold;
            color: #ff9800;
            font-family: 'Calibri', sans-serif;
            margin: 0;
        }
        .header-badge {
            position: absolute;
            left: 20px;
            height: 60px;
        }
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
        .pagination .page-link {
            color: #fff;
            background-color: #444;
        }
    </style>
@endsection

@section('js')
    <script>
        document.getElementById('searchButton').addEventListener('click', function () {
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

        document.getElementById('clearFiltersButton').addEventListener('click', function () {
            document.getElementById('filterCourse').value = 'all';
            document.getElementById('filterDate').value = '';
            const rows = document.querySelectorAll('#recordingTable tr');
            rows.forEach(row => row.style.display = '');
        });
    </script>
    <script>
        const recordings = document.querySelectorAll("#recordingTable tr");
        const rowsPerPage = 5;
        let currentPage = 1;

        function showPage(page) {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            recordings.forEach((row, index) => {
                if (index >= start && index < end) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });

            // Paginación
            const totalPages = Math.ceil(recordings.length / rowsPerPage);
            const pageNumbers = document.getElementById("pageNumbers");
            pageNumbers.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement("button");
                button.textContent = i;
                button.classList.add("btn", "btn-outline-secondary", "mx-1");
                if (i === page) {
                    button.disabled = true;
                }
                button.onclick = () => showPage(i);
                pageNumbers.appendChild(button);
            }

            // Deshabilitar o habilitar botones de paginación
            document.getElementById("prevBtn").disabled = page === 1;
            document.getElementById("nextBtn").disabled = page === totalPages;
        }

        document.getElementById("prevBtn").onclick = () => showPage(currentPage - 1);
        document.getElementById("nextBtn").onclick = () => showPage(currentPage + 1);

        showPage(currentPage);
    </script>
@endsection

