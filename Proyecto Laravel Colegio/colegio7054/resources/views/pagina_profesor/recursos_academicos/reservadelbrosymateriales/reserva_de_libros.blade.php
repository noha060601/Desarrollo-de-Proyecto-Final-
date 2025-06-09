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
        <div class="container">
            <div class="form-container">
                <form id="reservationForm" action="" method="POST">
                    @csrf
                    <!-- Encabezado de Título y Fecha -->
                    <div class="title-section">
                        <h3 class="main-title">FICHA DE RESERVA</h3>                 
                        <!-- Campo solo lectura -->
                        <label class="date-label">Fecha de Reserva:
                            <input type="date" id="fecha" name="fecha" class="date-input" readonly>
                        </label>
                    </div>

                    <!-- Dividir el formulario en dos columnas -->
                    <div class="row">
                        <!-- Primera columna -->
                        <div class="col-md-6">
                            <!-- Detalles del Libro -->
                            <div class="section">
                                <h3 class="section-title">Detalles del Libro</h3>
                                <div class="form-group">
                                    <label for="book_title">Título del Libro:</label>
                                    <input type="text" id="book_title" name="book_title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="author">Autor:</label>
                                    <input type="text" id="author" name="author" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="genre">Género:</label>
                                    <select id="genre" name="genre" class="form-control" required>
                                        <option value="">Seleccione un género</option>
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
                                <h3 class="section-title">Detalles de la Reserva</h3>
                                <div class="form-group">
                                    <label for="pickup_date">Fecha de Retiro:</label>
                                    <input type="date" id="pickup_date" name="pickup_date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="return_date">Fecha de Devolución:</label>
                                    <input type="date" id="return_date" name="return_date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="location">Ubicación de la Biblioteca:</label>
                                    <select id="location" name="location" class="form-control" required>
                                        <option value="">Seleccione una ubicación</option>
                                        <option value="central">Biblioteca Central</option>
                                        <option value="sucursal1">Biblioteca de Primaria</option>
                                        <option value="sucursal2">Biblioteca de Secundaria</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Segunda columna -->
                        <div class="col-md-6">
                            <!-- Detalles de Contacto -->
                            <div class="section">
                                <h3 class="section-title">Detalles de Contacto</h3>
                                <div class="form-group">
                                    <label for="name">Nombre Completo:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Teléfono:</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico:</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>

                            <!-- Notas Adicionales -->
                            <div class="section">
                                <h3 class="section-title">Información Adicional</h3>
                                <div class="form-group">
                                    <label for="additional_notes">Notas Adicionales:</label>
                                    <textarea id="additional_notes" name="additional_notes" class="form-control" rows="4" placeholder="Ingrese cualquier información adicional relevante para su reserva..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Botón de Enviar -->
                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Enviar Reserva
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-redo"></i> Limpiar Formulario
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('css')
<style>

   /* ===========================================
   ESTILOS PARA FORMULARIO DE RESERVA
   =========================================== */

/* Header Container */
.header-container {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fbb000;
    padding: 10px;
    border-radius: 8px;
    color: #fff;
    margin-bottom: 10px;
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

/* Sección secundaria */
.sec {
    text-align: center;
    font-family: 'Arial Black', Arial, sans-serif;
    font-size: 90px;
    color: white;
    text-shadow: 5px 5px 0 rgb(95, 92, 92);
    padding: 15px;
    border-radius: 8px;
}

/* ===========================================
   FONDO Y CONTENEDOR PRINCIPAL
   =========================================== */

/* Fondo de pantalla completa */
.background-image {
    background: url('{{ asset('imagenes/foncol.jpg') }}') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px 0;
}

/* Container principal */
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Contenedor del formulario */
.form-container {
    background-color: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
    max-width: 1000px;
    width: 100%;
    margin: 0 auto;
}

/* ===========================================
   SECCIÓN DE TÍTULO
   =========================================== */

.title-section {
    background: linear-gradient(135deg, #ffcc00, #fbb000);
    padding: 20px;
    color: black;
    margin-bottom: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.main-title {
    font-weight: bold;
    font-size: 28px;
    margin: 0;
    text-align: center;
    flex-grow: 1;
    color: #333;
    text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
}

.date-label {
    margin: 0;
    font-weight: 600;
    color: #333;
}

.date-input {
    margin-left: 10px;
    padding: 5px 10px;
    border: 2px solid #fff;
    border-radius: 4px;
    background-color: rgba(255, 255, 255, 0.9);
    color: #333;
    font-weight: 500;
}

/* ===========================================
   GRID Y SECCIONES
   =========================================== */

.row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
    gap: 20px;
}

.col-md-6 {
    flex: 1;
    min-width: 300px;
    padding: 0 15px;
}

/* Secciones del formulario */
.section {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 25px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 204, 0, 0.3);
}

.section-title {
    background: linear-gradient(135deg, #ffcc00, #fbb000);
    padding: 12px;
    color: #333;
    border-radius: 6px;
    font-weight: bold;
    font-size: 18px;
    margin: -20px -20px 20px -20px;
    text-align: center;
    text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
}

/* ===========================================
   CAMPOS DE FORMULARIO
   =========================================== */

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
    font-size: 14px;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border-radius: 6px;
    border: 2px solid #ddd;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    color: #333;
    font-size: 16px;
    transition: all 0.3s ease;
    box-sizing: border-box;
}

.form-control:focus {
    border-color: #ffcc00;
    box-shadow: 0px 0px 12px rgba(255, 204, 0, 0.4);
    outline: none;
    background-color: #fffef7;
}

.form-control:hover {
    border-color: #fbb000;
}

/* Textarea específico */
textarea.form-control {
    resize: vertical;
    min-height: 100px;
}

/* Select específico */
select.form-control {
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 12px center;
    background-repeat: no-repeat;
    background-size: 16px;
    padding-right: 40px;
}

/* ===========================================
   BOTONES
   =========================================== */

.button-group {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 30px;
    flex-wrap: wrap;
}

.btn {
    padding: 12px 25px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-width: 150px;
    justify-content: center;
}

.btn-primary {
    background: linear-gradient(135deg, #ffcc00, #fbb000);
    color: #333;
    box-shadow: 0px 4px 12px rgba(255, 204, 0, 0.3);
}

.btn-primary:hover {
    background: linear-gradient(135deg, #fbb000, #ff9900);
    transform: translateY(-2px);
    box-shadow: 0px 6px 16px rgba(255, 204, 0, 0.4);
}

.btn-secondary {
    background: linear-gradient(135deg, #6c757d, #5a6268);
    color: white;
    box-shadow: 0px 4px 12px rgba(108, 117, 125, 0.3);
}

.btn-secondary:hover {
    background: linear-gradient(135deg, #5a6268, #495057);
    transform: translateY(-2px);
    box-shadow: 0px 6px 16px rgba(108, 117, 125, 0.4);
}

/* ===========================================
   RESPONSIVE DESIGN
   =========================================== */

@media (max-width: 768px) {
    .background-image {
        padding: 10px 0;
        min-height: auto;
    }
    
    .form-container {
        padding: 20px;
        margin: 10px;
    }
    
    .row {
        flex-direction: column;
        gap: 0;
    }
    
    .col-md-6 {
        padding: 0;
        min-width: auto;
    }
    
    .title-section {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .main-title {
        font-size: 24px;
    }
    
    .sec {
        font-size: 60px;
        padding: 10px;
    }
    
    .button-group {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .form-container {
        padding: 15px;
    }
    
    .section {
        padding: 15px;
    }
    
    .section-title {
        margin: -15px -15px 15px -15px;
        font-size: 16px;
    }
    
    .main-title {
        font-size: 20px;
    }
}
</style>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('reservationForm');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío por defecto del formulario
            // Realiza el envío del formulario aquí si es necesario
            form.reset(); // Limpia todos los campos del formulario
            alert('Reserva enviada exitosamente y formulario limpiado.');
        });
    });
</script>
<script>
    // Obtener la fecha actual en formato yyyy-mm-dd
    const hoy = new Date().toISOString().split('T')[0];

    // Asignar la fecha a ambos campos
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('fecha').value = hoy;
    });
</script>
@endsection
