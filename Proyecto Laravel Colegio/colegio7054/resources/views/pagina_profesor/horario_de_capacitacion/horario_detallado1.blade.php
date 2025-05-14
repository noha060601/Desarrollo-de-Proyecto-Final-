@extends('adminlte::page')

@section('title', 'Calendario y Horarios')

@section('content_header')
    <h1 class="text-center">Calendario y Gestión de Horarios</h1>
@endsection

<?php
// Función para asignar colores a cada mes
function getColorForMonth($month) {
    $monthColors = [
        1 => "#FFCCCC",    // Rojo claro (Enero)
        2 => "#FFE5CC",    // Naranja claro (Febrero)
        3 => "#FFFFCC",    // Amarillo claro (Marzo)
        4 => "#CCFFCC",    // Verde claro (Abril)
        5 => "#CCFFFF",    // Celeste (Mayo)
        6 => "#CCE5FF",    // Azul claro (Junio)
        7 => "#CCCCFF",    // Morado claro (Julio)
        8 => "#E5CCFF",    // Lila (Agosto)
        9 => "#FFCCFF",    // Rosado (Septiembre)
        10 => "#FFD9E8",   // Rosa pálido (Octubre)
        11 => "#FFE6CC",   // Durazno claro (Noviembre)
        12 => "#D9CCFF"    // Lavanda claro (Diciembre)
    ];
    return $monthColors[$month] ?? "#FFFFFF"; // Color blanco por defecto
}
?>

@section('content')
<div class="card">
    <div class="card-body">
        <!-- Filtros -->
        <form>
            <div class="row mb-3">
                <div class="col-md-4">
                    <select name="seccion" class="form-control">
                        <option value="">Todas las secciones</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="grado" class="form-control">
                        <option value="">Todos los grados</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="curso" class="form-control">
                        <option value="">Todos los cursos</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
            <button type="button" onclick="exportToPDF()" class="btn btn-secondary">Exportar a PDF</button>
        </form>

        <!-- Calendario -->
        <div id="calendario" class="calendario">
            @foreach ($meses as $mes => $dias)
                <div class="mes border rounded shadow-sm m-2 p-3 d-none" style="background-color: {{ getColorForMonth($mes) }};">
                    <div class="nombre-mes text-uppercase">{{ $mes }}</div>
                    <div class="dias">
                        @for ($i = 1; $i <= $dias; $i++)
                            <div class="dia">
                                {{ $i }}
                                <div class="eventos">
                                    @if ($i % 5 == 0)
                                        <span class="badge badge-info">Evento</span>
                                    @endif
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <button id="prevMonth" class="btn btn-primary">← Mes Anterior</button>
            <button id="nextMonth" class="btn btn-primary">Mes Siguiente →</button>
        </div>
    </div>

    <!-- Horarios del Día -->
    <div class="card mt-4">
        <div class="card-body">
            <h3 id="selectedDateHeader">Horarios del día</h3>
            <div class="time-slots" id="timeSlots"></div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .calendario {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
    }
    .mes {
        width: 90%;
        max-width: 1200px;
        margin: 20px auto;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    .nombre-mes {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }
    .dias {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 15px;
    }
    .dia {
        height: 100px;
        text-align: center;
        padding: 20px;
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        position: relative;
        font-size: 18px;
    }
    .dia:hover {
        background-color: #e9ecef;
        cursor: pointer;
    }
    .time-slots .time-slot {
        margin: 5px 0;
        padding: 10px;
        border-radius: 5px;
        background-color: #f0f0f0;
    }
</style>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const meses = document.querySelectorAll('.mes');
        let currentMonth = new Date().getMonth();
        const currentDay = new Date().getDate();

        function showMonth(index) {
            meses.forEach((mes, i) => {
                mes.classList.add('d-none');
                if (i === index) {
                    mes.classList.remove('d-none');
                }
            });
            highlightToday(index);
        }

        function highlightToday(monthIndex) {
            const days = meses[monthIndex].querySelectorAll('.dia');
            days.forEach((day) => {
                if (parseInt(day.textContent) === currentDay && monthIndex === currentMonth) {
                    day.style.backgroundColor = '#FFD700';
                    day.style.fontWeight = 'bold';
                }
            });
        }

        function createTimeSlots() {
            const container = document.getElementById('timeSlots');
            container.innerHTML = '';
            for (let hour = 0; hour < 24; hour++) {
                const slot = document.createElement('div');
                slot.className = 'time-slot';
                slot.textContent = `${hour}:00 - ${hour + 1}:00`;
                container.appendChild(slot);
            }
        }

        function exportToPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            doc.text("Horario Detallado", 10, 10);
            doc.save("horario_detallado.pdf");
        }

        document.getElementById('prevMonth').addEventListener('click', () => {
            currentMonth = (currentMonth > 0) ? currentMonth - 1 : meses.length - 1;
            showMonth(currentMonth);
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            currentMonth = (currentMonth < meses.length - 1) ? currentMonth + 1 : 0;
            showMonth(currentMonth);
        });

        showMonth(currentMonth);
        createTimeSlots();
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
@endsection






