@extends('adminlte::page')

@section('title', 'Reserva de Libros')

@section('content_header')
    <div class="header-container">
        <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia" class="header-badge">
        <h1 class="sec">"RESERVA DE RECURSOS BIBLIOTECARIOS"</h1>
    </div>
@endsection

@section('content')
<div class="background-image">
    <div class="form-container">
        <form action="" method="POST">
            @csrf
            <!-- Encabezado de Título y Fecha -->
            <div class="title-section">
                <h3 class="main-title">FICHA DE RESERVA</h3>
                <label class="date-label">Fecha: <input type="date" name="date" class="date-input"></label>
            </div>

            <!-- Dividir el formulario en dos columnas -->
            <div class="row">
                <!-- Primera columna -->
                <div class="col-md-6">
                    <!-- Detalles del Libro -->
                    <div class="section">
                        <h3 class="main-title">Detalles del Libro</h3>
                        <div class="form-group">
                            <label for="book_title">Título del Libro:</label>
                            <input type="text" id="book_title" name="book_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">Autor:</label>
                            <input type="text" id="author" name="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="genre">Género:</label>
                            <select id="genre" name="genre" class="form-control">
                                <option value="matematica">Matemática</option>
                                <option value="comunicacion">Comunicación</option>
                                <option value="ciencia">Ciencia</option>
                                <option value="historia">Historia</option>
                                <option value="biografia">Biografía</option>
                            </select>
                        </div>
                    </div>

                    <!-- Detalles de Reserva -->
                    <div class="section">
                        <h3 class="main-title">Detalles de la Reserva</h3>
                        <div class="form-group">
                            <label for="pickup_date">Fecha de Retiro:</label>
                            <input type="date" id="pickup_date" name="pickup_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="return_date">Fecha de Devolución:</label>
                            <input type="date" id="return_date" name="return_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="location">Ubicación de la Biblioteca:</label>
                            <select id="location" name="location" class="form-control">
                                <option value="central">Biblioteca Central</option>
                                <option value="sucursal1">Biblioteca de primaria</option>
                                <option value="sucursal2">Biblioteca de segundaria</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Segunda columna -->
                <div class="col-md-6">
                    <!-- Detalles de Contacto -->
                    <div class="section">
                        <h3 class="main-title">Detalles de Contacto</h3>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono:</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="section">
                        <div class="form-group">
                            <label for="additional_notes">Notas Adicionales:</label>
                            <textarea id="additional_notes" name="additional_notes" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón de Enviar -->
            <div class="button-group">
                <button type="submit" class="btn btn-primary">Enviar Reserva</button>
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
            color: white;
            text-shadow: 5px 5px 0 rgb(95, 92, 92);

            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .header-badge {
    position: absolute;
    left: 20px; /* Posiciona la insignia al extremo izquierdo */
    height: 60px;
}


    /* Fondo de pantalla completa */
    .background-image {
        background: url('{{ asset('imagenes/foncol.jpg') }}') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Encapsulado del formulario */
    .form-container {
        background-color: rgba(255, 255, 255, 0.704); /* Fondo blanco con opacidad */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        max-width: 800px;
        width: 100%;
    }

    /* Estilo del encabezado */


    .title-section {
    background-color: #ffcc00;
    padding: 10px;
    color: black;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.main-title {
    font-weight: bold;
    font-size: 25px;
    margin: 0 auto; /* Centra el título horizontalmente */
    text-align: center;
    flex-grow: 1; /* Permite que el título ocupe espacio extra para mantenerse en el centro */
}

.date-label {
    margin: 0;
}



    /* Estilos para los campos de formulario */
    .form-control, .form-control-file, .form-group select {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ddd;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9; /* Fondo claro */
        color: #333; /* Color de texto */
        font-size: 16px; /* Tamaño de fuente */
    }

    /* Efecto al enfocar los campos */
    .form-control:focus, .form-group select:focus {
        border-color: #ffcc00; /* Borde amarillo al enfocar */
        box-shadow: 0px 0px 8px rgba(255, 204, 0, 0.5); /* Sombra al enfocar */
        outline: none;
    }

    /* Estilos para las secciones de encabezado de cada grupo */
    .section h3 {
        background-color: #ffcc00;
        padding: 8px;
        color: black;
        border-radius: 5px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
    }

    /* Botón de enviar */
    .button-group {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .btn-primary {
        background-color: #ffcc00;
        border: none;
        color: black;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ff9900;
    }

</style>
@endsection

@section('js')
<!-- Aquí puedes añadir cualquier JavaScript adicional si lo necesitas -->
@endsection
