<!-- pagina corregida con formato  -->
@extends('adminlte::page')


@section('title', 'Capacitaciones en Vivo')

@section('content_header')
    <div class="header-container">
        <img src="{{ asset('imagenes/insig1.png') }}" alt="Insignia" class="header-badge">
        <h1 class="sec">CAPACITACIONES EN VIVO </h1>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- Tarjeta de la capacitación -->
            <div class="col-md-3">
                <div class="card p-3 mb-4">
                    <!-- Título de la capacitación y etiqueta de estado -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Desarrollo de Habilidades Directivas</h5>
                        <span class="badge badge-warning">En Vivo</span>
                    </div>

                    <!-- Imagen de la grabación -->
                    <div class="mb-3" style="background-image: url('{{ asset('imagenes/zoom.jpg') }}'); background-size: cover; height: 120px; border-radius: 8px;"></div>

                    <!-- Información del profesor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('imagenes/direc1.PNG') }}" alt="Foto del profesor" class="rounded-circle mr-3" style="width: 45px; height: 45px;">
                        <div>
                            <strong>Profesor:</strong> Carlos Lopez Peres <br>
                            <small>huallanca@gmail.com</small>
                        </div>
                    </div>

                    <!-- Información adicional de la clase -->
                    <p><strong>Fecha:</strong> 28/08/2024</p>
                    <p><strong>Hora:</strong> 06:15 pm - Aula</p>

                    <!-- Botón para ingresar a la clase en vivo -->
                    <div class="text-center">
                        <a href="https://google.zoom.us/myhome" class="btn btn-primary" target="_blank">
                            <i class="fas fa-video" style="margin-right: 5px;"></i> Ingresar a la Clase en Vivo
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 mb-4">
                    <!-- Título de la capacitación y etiqueta de estado -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Desarrollo de Habilidades Directivas</h5>
                        <span class="badge badge-warning">En Vivo</span>
                    </div>

                    <!-- Imagen de la grabación -->
                    <div class="mb-3" style="background-image: url('{{ asset('imagenes/zoom.jpg') }}'); background-size: cover; height: 120px; border-radius: 8px;"></div>

                    <!-- Información del profesor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('imagenes/sub1.PNG') }}" alt="Foto del profesor" class="rounded-circle mr-3" style="width: 45px; height: 45px;">
                        <div>
                            <strong>Profesor:</strong> Carlos Lopez Peres <br>
                            <small>huallanca@gmail.com</small>
                        </div>
                    </div>

                    <!-- Información adicional de la clase -->
                    <p><strong>Fecha:</strong> 28/08/2024</p>
                    <p><strong>Hora:</strong> 06:15 pm - Aula</p>

                    <!-- Botón para ingresar a la clase en vivo -->
                    <div class="text-center">
                        <a href="https://google.zoom.us/myhome" class="btn btn-primary" target="_blank">
                            <i class="fas fa-video" style="margin-right: 5px;"></i> Ingresar a la Clase en Vivo
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card p-3 mb-4">
                    <!-- Título de la capacitación y etiqueta de estado -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Desarrollo de Habilidades Directivas</h5>
                        <span class="badge badge-warning">En Vivo</span>
                    </div>

                    <!-- Imagen de la grabación -->
                    <div class="mb-3" style="background-image: url('{{ asset('imagenes/zoom.jpg') }}'); background-size: cover; height: 120px; border-radius: 8px;"></div>

                    <!-- Información del profesor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('imagenes/sub2.PNG') }}" alt="Foto del profesor" class="rounded-circle mr-3" style="width: 45px; height: 45px;">
                        <div>
                            <strong>Profesor:</strong> Carlos Lopez Peres <br>
                            <small>huallanca@gmail.com</small>
                        </div>
                    </div>

                    <!-- Información adicional de la clase -->
                    <p><strong>Fecha:</strong> 28/08/2024</p>
                    <p><strong>Hora:</strong> 06:15 pm - Aula</p>

                    <!-- Botón para ingresar a la clase en vivo -->
                    <div class="text-center">
                        <a href="https://google.zoom.us/myhome" class="btn btn-primary" target="_blank">
                            <i class="fas fa-video" style="margin-right: 5px;"></i> Ingresar a la Clase en Vivo
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card p-3 mb-4">
                    <!-- Título de la capacitación y etiqueta de estado -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Desarrollo de Habilidades Directivas</h5>
                        <span class="badge badge-warning">En Vivo</span>
                    </div>

                    <!-- Imagen de la grabación -->
                    <div class="mb-3" style="background-image: url('{{ asset('imagenes/zoom.jpg') }}'); background-size: cover; height: 120px; border-radius: 8px;"></div>

                    <!-- Información del profesor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('imagenes/direc1.PNG') }}" alt="Foto del profesor" class="rounded-circle mr-3" style="width: 45px; height: 45px;">
                        <div>
                            <strong>Profesor:</strong> Carlos Lopez Peres <br>
                            <small>huallanca@gmail.com</small>
                        </div>
                    </div>

                    <!-- Información adicional de la clase -->
                    <p><strong>Fecha:</strong> 28/08/2024</p>
                    <p><strong>Hora:</strong> 06:15 pm - Aula</p>

                    <!-- Botón para ingresar a la clase en vivo -->
                    <div class="text-center">
                        <a href="https://google.zoom.us/myhome" class="btn btn-primary" target="_blank">
                            <i class="fas fa-video" style="margin-right: 5px;"></i> Ingresar a la Clase en Vivo
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card p-3 mb-4">
                    <!-- Título de la capacitación y etiqueta de estado -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Desarrollo de Habilidades Directivas</h5>
                        <span class="badge badge-warning">En Vivo</span>
                    </div>

                    <!-- Imagen de la grabación -->
                    <div class="mb-3" style="background-image: url('{{ asset('imagenes/zoom.jpg') }}'); background-size: cover; height: 120px; border-radius: 8px;"></div>

                    <!-- Información del profesor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('imagenes/sub1.PNG') }}" alt="Foto del profesor" class="rounded-circle mr-3" style="width: 45px; height: 45px;">
                        <div>
                            <strong>Profesor:</strong> Carlos Lopez Peres <br>
                            <small>huallanca@gmail.com</small>
                        </div>
                    </div>

                    <!-- Información adicional de la clase -->
                    <p><strong>Fecha:</strong> 28/08/2024</p>
                    <p><strong>Hora:</strong> 06:15 pm - Aula</p>

                    <!-- Botón para ingresar a la clase en vivo -->
                    <div class="text-center">
                        <a href="https://google.zoom.us/myhome" class="btn btn-primary" target="_blank">
                            <i class="fas fa-video" style="margin-right: 5px;"></i> Ingresar a la Clase en Vivo
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 mb-4">
                    <!-- Título de la capacitación y etiqueta de estado -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Desarrollo de Habilidades Directivas</h5>
                        <span class="badge badge-warning">En Vivo</span>
                    </div>

                    <!-- Imagen de la grabación -->
                    <div class="mb-3" style="background-image: url('{{ asset('imagenes/zoom.jpg') }}'); background-size: cover; height: 120px; border-radius: 8px;"></div>

                    <!-- Información del profesor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('imagenes/sub1.PNG') }}" alt="Foto del profesor" class="rounded-circle mr-3" style="width: 45px; height: 45px;">
                        <div>
                            <strong>Profesor:</strong> Carlos Lopez Peres <br>
                            <small>huallanca@gmail.com</small>
                        </div>
                    </div>

                    <!-- Información adicional de la clase -->
                    <p><strong>Fecha:</strong> 28/08/2024</p>
                    <p><strong>Hora:</strong> 06:15 pm - Aula</p>

                    <!-- Botón para ingresar a la clase en vivo -->
                    <div class="text-center">
                        <a href="https://google.zoom.us/myhome" class="btn btn-primary" target="_blank">
                            <i class="fas fa-video" style="margin-right: 5px;"></i> Ingresar a la Clase en Vivo
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card p-3 mb-4">
                    <!-- Título de la capacitación y etiqueta de estado -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Desarrollo de Habilidades Directivas</h5>
                        <span class="badge badge-warning">En Vivo</span>
                    </div>

                    <!-- Imagen de la grabación -->
                    <div class="mb-3" style="background-image: url('{{ asset('imagenes/zoom.jpg') }}'); background-size: cover; height: 120px; border-radius: 8px;"></div>

                    <!-- Información del profesor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('imagenes/sub2.PNG') }}" alt="Foto del profesor" class="rounded-circle mr-3" style="width: 45px; height: 45px;">
                        <div>
                            <strong>Profesor:</strong> Carlos Lopez Peres <br>
                            <small>huallanca@gmail.com</small>
                        </div>
                    </div>

                    <!-- Información adicional de la clase -->
                    <p><strong>Fecha:</strong> 28/08/2024</p>
                    <p><strong>Hora:</strong> 06:15 pm - Aula</p>

                    <!-- Botón para ingresar a la clase en vivo -->
                    <div class="text-center">
                        <a href="https://google.zoom.us/myhome" class="btn btn-primary" target="_blank">
                            <i class="fas fa-video" style="margin-right: 5px;"></i> Ingresar a la Clase en Vivo
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 mb-4">
                    <!-- Título de la capacitación y etiqueta de estado -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Desarrollo de Habilidades Directivas</h5>
                        <span class="badge badge-warning">En Vivo</span>
                    </div>

                    <!-- Imagen de la grabación -->
                    <div class="mb-3" style="background-image: url('{{ asset('imagenes/zoom.jpg') }}'); background-size: cover; height: 120px; border-radius: 8px;"></div>

                    <!-- Información del profesor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('imagenes/sub2.PNG') }}" alt="Foto del profesor" class="rounded-circle mr-3" style="width: 45px; height: 45px;">
                        <div>
                            <strong>Profesor:</strong> Carlos Lopez Peres <br>
                            <small>huallanca@gmail.com</small>
                        </div>
                    </div>

                    <!-- Información adicional de la clase -->
                    <p><strong>Fecha:</strong> 28/08/2024</p>
                    <p><strong>Hora:</strong> 06:15 pm - Aula</p>

                    <!-- Botón para ingresar a la clase en vivo -->
                    <div class="text-center">
                        <a href="https://google.zoom.us/myhome" class="btn btn-primary" target="_blank">
                            <i class="fas fa-video" style="margin-right: 5px;"></i> Ingresar a la Clase en Vivo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Repite las tarjetas de capacitación como antes -->
            <!-- ... -->
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
        .container {

        .badge-warning {
            background-color: #FFC107;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
        }   max-width: 100%;
        }
        .card {
            border-radius: 10px;
            background-color: #2A2A2E;
            color: #FFF;
        }
    </style>
@endsection

@section('js')
    <script>
        console.log('Página de capacitaciones en vivo cargada');
    </script>
@endsection


