@extends('adminlte::page')

@section('title', 'Formulario de Incidencias')

@section('content_header')
<div class="header-container">
    <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia" class="header-badge">
    <h1 class="sec">"Formulario de Incidencias Recursos Académicos"</h1>
</div>
@endsection

@section('content')
<div class="form-container">
    <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia del Colegio" class="insignia">

    <form id="incidencias-form" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" class="form-control">
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
            <button type="button" class="btn btn-danger" onclick="descargarPDF()">Descargar en PDF</button>
            <button type="reset" class="btn btn-dark">Limpiar Formulario</button>
        </div>
    </form>
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

    .header-title {
    font-size: 2em;
    font-weight: bold;
    color: #ff9800;
    font-family: 'Calibri', sans-serif;
    margin: 0;
}
.sec {
            text-align: center;
            font-family: Arial Black;
            font-size: 90px;
            color: rgb(3, 3, 3);
            text-shadow: 5px 5px 0 rgb(249, 247, 247);

            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .header-badge {
    position: absolute;
    left: 20px; /* Posiciona la insignia al extremo izquierdo */
    height: 60px;
}




    .title-container {
        background-color: rgb(255, 153, 51);
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        font-weight: bold;
        color: rgb(9, 9, 9);
        margin-bottom: 20px;
    }
    .form-container {
        background-color: #f9bc14;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 30px auto 0;
        position: relative;
    }
    .insignia {
        display: block;
        width: 100px;
        height: auto;
        margin: 0 auto 20px auto;
    }
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


</style>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script>
    function limpiarArchivos() {
        document.getElementById('evidencia').value = "";
        alert("Archivos seleccionados eliminados.");
    }

    function descargarPDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        doc.text("Formulario de Incidencias en Recursos Académicos", 10, 10);

        // Obtén todos los valores de los campos del formulario
        const fields = [
            {label: "Fecha", value: document.getElementById('fecha').value},
            {label: "Nombre del Estudiante", value: document.getElementById('nombre_estudiante').value},
            {label: "Nombre del Padre o Tutor", value: document.getElementById('nombre_padre').value},
            {label: "Fecha y Hora de la Incidencia", value: document.getElementById('fecha_incidencia').value},
            {label: "Ubicación", value: document.getElementById('ubicacion').value},
            {label: "Descripción de la Incidencia", value: document.getElementById('descripcion').value},
            {label: "Explicación/Notas del Personal", value: document.getElementById('notas').value},
            {label: "Testigos", value: document.getElementById('testigos').value}
        ];

        let y = 20;
        fields.forEach(field => {
            doc.text(`${field.label}: ${field.value}`, 10, y);
            y += 10;
        });

        doc.save("Formulario_Incidencias.pdf");
    }
</script>
@endsection
