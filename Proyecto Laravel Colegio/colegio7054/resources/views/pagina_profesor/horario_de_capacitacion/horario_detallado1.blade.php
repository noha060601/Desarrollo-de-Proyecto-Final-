
<!-- pagina corregida con formato  -->
@extends('adminlte::page')

@section('content_header')
    <div class="header-container">
        <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia" class="header-badge">
        <h1 class="sec">NOTAS DE HORARIO DETALLADO</h1>
    </div>
@endsection

@section('content')
    <div id="calendar-wrapper" class="card p-3">
        <div id="calendar"></div>
        <button id="add-event-btn" class="btn btn-primary mt-3">Agregar Evento</button>
    </div>

    <!-- Modal para agregar evento -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Agregar Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="eventForm">
                        <div class="form-group">
                            <label for="eventTitle">Título del Evento</label>
                            <input type="text" class="form-control" id="eventTitle" required>
                        </div>
                        <div class="form-group">
                            <label for="eventDate">Fecha y Hora</label>
                            <input type="datetime-local" class="form-control" id="eventDate" required>
                        </div>
                        <div class="form-group">
                            <label for="eventDescription">Descripción</label>
                            <textarea class="form-control" id="eventDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="eventPriority">Prioridad</label>
                            <select class="form-control" id="eventPriority" required>
                                <option value="high">Alta (Rojo)</option>
                                <option value="medium">Media (Celeste)</option>
                                <option value="low">Baja (Verde)</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar Evento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.css" rel="stylesheet">
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

            #calendar-wrapper {
                background-color: #f8f9fa;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 100%;
                height: 80vh;
                margin: 0 auto;
                padding: 20px;
                overflow: auto;
            }

            .fc-toolbar {
                background-color: #007bff;
                color: white;
                text-align: center;
                padding: 10px 0;
                border-radius: 5px;
            }

            .fc-event {
                position: relative;
                padding: 5px 10px;
                border-radius: 5px;
                color: white !important;
                font-weight: bold;
                text-align: center;
            }

            .fc-event.fc-high {
                background-color: #dc3545 !important;
            }

            .fc-event.fc-medium {
                background-color: #17a2b8 !important;
            }

            .fc-event.fc-low {
                background-color: #28a745 !important;
            }

            .fc-day-header {
                background-color: #007bff !important;
                color: rgb(7, 7, 7);
                font-weight: bold;
                text-align: center;
            }

            .fc-sat, .fc-sun {
                background-color: #eff4f5 !important;
            }

            .fc-day-number {
                font-weight: bold;
                font-size: 1.2rem;
                color: #333;
            }

            .fc-event .delete-event {
                position: absolute;
                top: 5px;
                right: 5px;
                color: white;
                font-size: 16px;
                cursor: pointer;
                background: rgba(0, 0, 0, 0.5);
                border-radius: 50%;
                padding: 5px;
            }

            /* Estilo para mostrar la descripción en el evento */
            .fc-event .fc-event-title {
                display: none; /* Ocultar el título */
            }

            .fc-event .fc-event-description {
                display: block;
                font-size: 12px;
                margin-top: 5px;
                color: #f8f9fa;
                opacity: 0.8;
                word-wrap: break-word;
                padding-top: 5px;
            }

        /* Asegurarse de que la descripción se vea en todas las vistas */
            .fc-event {
                position: relative;
                padding: 5px 10px;
                border-radius: 5px;
                color: white !important;
                font-weight: bold;
                text-align: center;
                min-height: 30px; /* Para asegurarse de que haya suficiente espacio para la descripción */
            }
    </style>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function() {
            var events = [];  // Array para almacenar los eventos

            // Inicialización del calendario
            $('#calendar').fullCalendar({
                locale: 'es',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'Hoy',
                    month: 'Mes',
                    week: 'Semana',
                    day: 'Día'
                },
                events: events, // Mostrar los eventos del array

                // Al hacer clic en un día, abrir el modal para agregar un evento
                dayClick: function(date, jsEvent, view) {
                    $('#eventModal').modal('show');
                    $('#eventDate').val(date.format('YYYY-MM-DDTHH:mm'));
                },

                // Configuración del calendario
                defaultView: 'month',
                monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
                dayNamesShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
                today: "Hoy",
                weekLabel: "Semana",
                allDayText: "Todo el día",
                eventLimitText: "más",
                eventRender: function(event, element) {
                    // Mostrar la descripción del evento en el pop-up y dentro del evento
                    if (event.description) {
                        element.find('.fc-title').append('<br><span class="fc-event-description">' + event.description + '</span>');
                    }
                }
            });

            // Mostrar el modal para agregar evento
            $('#add-event-btn').on('click', function() {
                $('#eventModal').modal('show');
            });

            // Guardar el evento
            $('#eventForm').on('submit', function(event) {
                event.preventDefault();

                var title = $('#eventTitle').val();
                var date = $('#eventDate').val();
                var description = $('#eventDescription').val();
                var priority = $('#eventPriority').val();

                if (title && date) {
                    // Definir la clase del evento según la prioridad
                    var eventClass = '';
                    if (priority === 'high') {
                        eventClass = 'fc-high';
                    } else if (priority === 'medium') {
                        eventClass = 'fc-medium';
                    } else if (priority === 'low') {
                        eventClass = 'fc-low';
                    }

                    // Crear el nuevo evento con la descripción como título
                    var newEvent = {
                        title: title,  // El título sigue siendo el título original
                        start: date,
                        description: description,  // Se agrega la descripción
                        className: eventClass
                    };

                    // Agregar el evento al array
                    events.push(newEvent);

                    // Renderizar el evento en el calendario
                    $('#calendar').fullCalendar('renderEvent', newEvent, true);

                    // Cerrar el modal
                    $('#eventModal').modal('hide');
                    $('#eventForm')[0].reset();
                }
            });
        });
    </script>
@endsection






