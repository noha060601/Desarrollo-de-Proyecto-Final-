@extends('adminlte::page')

@section('title', 'Formulario de Incidencias')

@section('content_header')
    <div class="header-container">
        <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia" class="header-badge">
        <h1 class="sec">"Formulario de Incidencias Recursos Académicos"</h1>
    </div>
@endsection

@section('content')
    <div class="form-background">
        <div class="form-container">
            <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia del Colegio" class="insignia">

            <form id="incidencias-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    
                    <input type="date" id="fecha" name="fecha" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="nombre_estudiante">Nombre del Estudiante</label>
                    <input type="text" id="nombre_estudiante" name="nombre_estudiante" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nombre_padre">Nombre del Padre o Tutor</label>
                    <input type="text" id="nombre_padre" name="nombre_padre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="fecha_incidencia">Fecha y Hora de la Incidencia</label>
                    <input type="datetime-local" id="fecha_incidencia" name="fecha_incidencia" class="form-control">
                </div>

                <div class="form-group">
                    <label for="ubicacion">Ubicación</label>
                    <input type="text" id="ubicacion" name="ubicacion" class="form-control">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción de la Incidencia</label>
                    <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="notas">Explicación/Notas del Personal</label>
                    <textarea id="notas" name="notas" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="testigos">Testigos</label>
                    <input type="text" id="testigos" name="testigos" class="form-control">
                </div>

                <div class="form-group">
                    <label for="evidencia">Subir Pruebas (Fotos u otros documentos)</label>
                    <input type="file" id="evidencia" name="evidencia[]" class="form-control-file" multiple>
                    <button type="button" class="btn btn-warning" onclick="limpiarArchivos()">Eliminar Archivos Seleccionados</button>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onclick="window.print()">Imprimir</button>
                    <button type="button" class="btn btn-primary" onclick="guardarFormulario()">Guardar Formulario</button> <!-- Cambié el tipo a button -->
                    <button type="reset" class="btn btn-dark">Limpiar Formulario</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center; /* Centra el contenido horizontalmente */
            background-color: #fbb000;
            padding: 10px;
            border-radius: 8px;
            color: #fff;
            margin-bottom: 10px;
            position: relative; /* Para permitir la insignia en el extremo izquierdo */
        }

        .sec {
            text-align: center;
            font-family: Arial Black;
            font-size: 90px;
            color: rgb(3, 3, 3);
            text-shadow: 5px 5px 0 rgba(249, 247, 247, 0.467);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .header-badge {
            position: absolute;
            left: 20px; /* Posiciona la insignia al extremo izquierdo */
            height: 60px;
        }

        /* Fondo con la imagen detrás del formulario */
        .form-background {
            background-image: url('{{ asset('imagenes/foncol.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh; /* Asegura que el fondo cubra toda la pantalla */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Contenedor del formulario con fondo transparente */
        .form-container {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con opacidad para la transparencia */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 30px auto 0;
            position: relative;
        }

        /* Insignia */
        .insignia {
            display: block;
            width: 100px;
            height: auto;
            margin: 0 auto 20px auto;
        }

        /* Estilos del formulario */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control, .form-control-file, .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .button-group {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        /* Estilos para la impresión */
        @media print {
            .button-group {
                display: none; /* Oculta los botones durante la impresión */
            }

            .form-container {
                border: 1px solid #ccc; /* Agrega un borde al formulario */
                padding: 20px;
            }

            .form-background {
                background: none; /* Quita el fondo durante la impresión */
            }

            .header-container {
                display: none; /* Oculta la cabecera durante la impresión */
            }

            .form-group {
                margin-bottom: 10px;
            }

            .form-control, .form-control-file, .form-group select, .form-group textarea {
                border: 1px solid #ccc;
                padding: 8px;
            }
        }
    </style>
@endsection

@section('js')
    <script>
        function limpiarArchivos() {
            document.getElementById('evidencia').value = "";
            alert("Archivos seleccionados eliminados.");
        }

        function guardarFormulario() {
            // Prevenir el envío del formulario
            alert("Formulario guardado satisfactoriamente.");
        }
    </script>
    <script>
    // Obtener la fecha actual en formato yyyy-mm-dd
        const hoy = new Date().toISOString().split('T')[0];
        document.getElementById('fecha').value = hoy;
    </script>
@endsection

