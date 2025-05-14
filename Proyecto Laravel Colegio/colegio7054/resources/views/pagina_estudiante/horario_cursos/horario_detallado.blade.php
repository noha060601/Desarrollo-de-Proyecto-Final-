@extends('adminlte::page')

@section('title', 'Gestión de Alumnos')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h3 class="card-title mb-3">Horario Detallado</h3>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-4">
                    <select name="seccion" class="form-control">
                        <option value="">Todas las secciones</option>
                        <!-- Opciones de secciones aquí -->
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="grado" class="form-control">
                        <option value="">Todos los grados</option>
                        <!-- Opciones de grados aquí -->
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="curso" class="form-control">
                        <option value="">Todos los cursos</option>
                        <!-- Opciones de cursos aquí -->
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Filtrar</button>
            <button onclick="exportToPDF()" class="btn btn-secondary mt-3">Exportar a PDF</button>
        </form>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="calendar-container">
            <div class="header">
                <div class="current-date" id="currentDate"></div>
                <div class="time" id="currentTime"></div>
            </div>

            <div class="calendar-view">
                <div class="month-view">
                    <table class="table table-bordered" id="calendar">
                        <thead>
                            <tr>
                                <th>Dom</th>
                                <th>Lun</th>
                                <th>Mar</th>
                                <th>Mié</th>
                                <th>Jue</th>
                                <th>Vie</th>
                                <th>Sáb</th>
                            </tr>
                        </thead>
                        <tbody id="calendarBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Contenedor para mostrar los cursos 
        <div id="courseSchedule" class="mt-4">
            <h4>Horario del Día</h4>
            <div id="morningCourses" class="turno-courses">
                <h5>Turno Mañana:</h5>
                <ul id="morningCoursesList"></ul>
            </div>
            <div id="afternoonCourses" class="turno-courses">
                <h5>Turno Tarde:</h5>
                <ul id="afternoonCoursesList"></ul>
            </div>
        </div>-->
    </div>
</div>
@endsection

@section('css')
<style>
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }
    .calendar-container {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .btn {
        margin-top: 5px;
    }
    .turno-courses {
        margin-top: 15px;
    }
    .turno-courses h5 {
        margin-bottom: 10px;
    }
    .turno-courses ul {
        list-style-type: none;
        padding-left: 0;
    }
    .turno-courses li {
        padding: 5px;
    }
</style>
@endsection

@section('js')
<script>
    // Simulación de cursos
    const cursos = {
        "lunes": { "mañana": ["Matemáticas", "Ciencias"], "tarde": ["Lengua", "Historia"] },
        "martes": { "mañana": ["Geometría", "Inglés"], "tarde": ["Arte", "Educación Física"] },
        "miércoles": { "mañana": ["Física", "Matemáticas"], "tarde": ["Literatura", "Música"] },
        // Puedes agregar más días con sus cursos respectivos
    };

    function getTurno(hour) {
        if (hour >= 6 && hour < 12) return ['turno-manana', 'Mañana'];
        if (hour >= 12 && hour < 18) return ['turno-tarde', 'Tarde'];
        return ['turno-noche', 'Noche'];
    }

    function formatTime(hour, minutes) {
        const period = hour >= 12 ? 'PM' : 'AM';
        const displayHour = hour % 12 || 12;
        return `${displayHour}:${minutes.toString().padStart(2, '0')} ${period}`;
    }

    function createCalendar() {
        const date = new Date();
        const monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                            'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        document.getElementById('currentDate').textContent = `${monthNames[date.getMonth()]} ${date.getFullYear()}`;

        const firstDay = new Date(date.getFullYear(), date.getMonth(), 1).getDay();
        const totalDays = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();

        let calendar = '';
        let currentDay = 1;
        for (let i = 0; i < 6; i++) {
            let row = '<tr>';
            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < firstDay) {
                    row += '<td></td>';
                } else if (currentDay > totalDays) {
                    row += '<td></td>';
                } else {
                    row += `<td onclick="selectDate(${date.getFullYear()}, ${date.getMonth()}, ${currentDay})">${currentDay}</td>`;
                    currentDay++;
                }
            }
            row += '</tr>';
            calendar += row;
        }
        document.getElementById('calendarBody').innerHTML = calendar;
    }

    function selectDate(year, month, day) {
        const selectedDate = new Date(year, month, day);
        const selectedDayName = new Intl.DateTimeFormat('es-ES', { weekday: 'long' }).format(selectedDate).toLowerCase();

        document.getElementById('selectedDateHeader').textContent = `Horarios del ${day} de ${new Intl.DateTimeFormat('es-ES', { month: 'long' }).format(selectedDate)}`;

        // Mostrar cursos según el día
        showCoursesForDay(selectedDayName);
    }

    function showCoursesForDay(day) {
        const morningCoursesList = document.getElementById('morningCoursesList');
        const afternoonCoursesList = document.getElementById('afternoonCoursesList');

        morningCoursesList.innerHTML = '';
        afternoonCoursesList.innerHTML = '';

        if (cursos[day]) {
            cursos[day].mañana.forEach(course => {
                const li = document.createElement('li');
                li.textContent = course;
                morningCoursesList.appendChild(li);
            });

            cursos[day].tarde.forEach(course => {
                const li = document.createElement('li');
                li.textContent = course;
                afternoonCoursesList.appendChild(li);
            });
        } else {
            morningCoursesList.innerHTML = '<li>No hay cursos programados.</li>';
            afternoonCoursesList.innerHTML = '<li>No hay cursos programados.</li>';
        }
    }

    function exportToPDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        doc.text("Horario Detallado", 10, 10);
        doc.save("horario_detallado.pdf");
    }

    createCalendar();
    selectDate(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
@endsection
