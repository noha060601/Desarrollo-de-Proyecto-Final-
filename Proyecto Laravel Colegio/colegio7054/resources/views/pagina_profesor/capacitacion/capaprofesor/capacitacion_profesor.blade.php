@extends('adminlte::page')

@section('title', 'Capacitación para Profesores')

@section('content_header')
    <div class="sec">
        <h1>Capacitación para Profesores</h1>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-body search-container" style="background-image: url('{{ asset('imagenes/bus2.jpg') }}'); background-size: cover; border-radius: 15px; padding: 20px;">
        <div class="row mb-4 align-items-center">
            <!-- Filtro de cursos -->
            <div class="col-md-4 d-flex justify-content-start">
                <select id="subjectFilter" class="form-select" onchange="filtrarCursos()">
                    <option value="todos">Todos</option>
                    <option value="rojo">Avanzado</option>
                    <option value="verde">Intermedio</option>
                    <option value="celeste">Basico</option>
                </select>
            </div>

            <!-- Barra de búsqueda -->
            <div class="col-md-4 d-flex justify-content-end">
                <div class="input-group search-box">
                    <input type="text" id="buscadorCursos" class="form-control" placeholder="Buscar curso" onkeyup="buscarCurso()">
                    <span class="input-group-text search-icon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!-- Curso Avanzado -->
    <div class="col-md-6 curso-card" data-nivel="rojo">
        <div class="card" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover;">
            <div class="card-header card-header-avanzado">
                <h5>Curso Avanzado de Métodos de Evaluación</h5>
            </div>
            <div class="card-body">
                <p>Curso especializado para el desarrollo de técnicas avanzadas de evaluación para medir el rendimiento de los estudiantes de manera efectiva.</p>
                <p><strong>Duración:</strong> 15 horas</p>
                <p><strong>Costo:</strong> Sin cargo</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Ver capacitación</a>
                    <a href="#" class="btn btn-success">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6 curso-card" data-nivel="celeste">
        <div class="card" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover;">
            <div class="card-header card-header-basico">
                <h5>Curso Básico de Planificación de Lecciones</h5>
            </div>
            <div class="card-body">
                <p>Este curso enseña a los docentes los fundamentos de la planificación de lecciones efectivas. Aprenderás cómo organizar tus clases, definir objetivos claros y estructurar actividades para maximizar el aprendizaje de tus estudiantes.</p>
                <p><strong>Duración:</strong> 2 horas</p>
                <p><strong>Costo:</strong> Sin cargo</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Ver capacitación</a>
                    <a href="#" class="btn btn-success">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Curso Intermedio -->
    <div class="col-md-6 curso-card" data-nivel="verde">
        <div class="card" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover;">
            <div class="card-header card-header-intermedio">
                <h5>Curso del Manejo de la Tecnología</h5>
            </div>
            <div class="card-body">
                <p>Cursos para adquirir habilidades de enseñanza en el entorno digital. Aprenda a usar las herramientas adecuadas para facilitar el aprendizaje.</p>
                <p><strong>Duración:</strong> 8 horas</p>
                <p><strong>Costo:</strong> Sin cargo</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Ver capacitación</a>
                    <a href="#" class="btn btn-success">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 curso-card" data-nivel="rojo">
        <div class="card" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover;">
            <div class="card-header card-header-avanzado">
                <h5>Innovación y Tecnología en la Educación</h5>
            </div>
            <div class="card-body">
                <p>Esta capacitación avanzada para docentes se centra en la integración de herramientas tecnológicas en el aula y en la aplicación de estrategias de enseñanza innovadoras.</p>
                <p><strong>Duración:</strong> 15 horas</p>
                <p><strong>Costo:</strong> Sin cargo</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Ver capacitación</a>
                    <a href="#" class="btn btn-success">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6 curso-card" data-nivel="verde">
        <div class="card" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover;">
            <div class="card-header card-header-intermedio">
                <h5>Clase de Estrategias para la Inclusión en el Aula</h5>
            </div>
            <div class="card-body">
                <p>Esta capacitación proporciona a los docentes herramientas y estrategias para fomentar un ambiente inclusivo que responda a las diversas necesidades de aprendizaje.</p>
                <p><strong>Duración:</strong> 6 horas</p>
                <p><strong>Costo:</strong> Sin cargo</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Ver capacitación</a>
                    <a href="#" class="btn btn-success">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 curso-card" data-nivel="celeste">
        <div class="card" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover;">
            <div class="card-header card-header-basico">
                <h5>Curso Básico en Gestión de Aula</h5>
            </div>
            <div class="card-body">
                <p>En esta capacitación, los maestros aprenderán principios básicos de gestión de aula para crear un ambiente de aprendizaje positivo y ordenado.</p>
                <p><strong>Duración:</strong> 3 horas</p>
                <p><strong>Costo:</strong> Sin cargo</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Ver capacitación</a>
                    <a href="#" class="btn btn-success">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-6 curso-card" data-nivel="verde">
        <div class="card" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover;">
            <div class="card-header card-header-intermedio">
                <h5>Clase de Evaluación Formativa y Retroalimentación</h5>
            </div>
            <div class="card-body">
                <p>En este curso, los profesores aprenderán técnicas de evaluación formativa y métodos efectivos de retroalimentación para mejorar el aprendizaje de los estudiantes.</p>
                <p><strong>Duración:</strong> 6 horas</p>
                <p><strong>Costo:</strong> Sin cargo</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Ver capacitación</a>
                    <a href="#" class="btn btn-success">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Curso Básico -->
    <div class="col-md-6 curso-card" data-nivel="celeste">
        <div class="card" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}'); background-size: cover;">
            <div class="card-header card-header-basico">
                <h5>Curso de Introducción a la Enseñanza</h5>
            </div>
            <div class="card-body">
                <p>Cursos para adquirir habilidades de enseñanza en el entorno digital. Aprenda a usar las herramientas adecuadas para facilitar el aprendizaje.</p>
                <p><strong>Duración:</strong> 8 horas</p>
                <p><strong>Costo:</strong> Sin cargo</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Ver capacitación</a>
                    <a href="#" class="btn btn-success">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

@section('css')
    <style>
        .header-box {
            background-color: rgb(30, 255, 0);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        .header-box h1 {
            color: white;
            font-weight: bold;
            margin: 0;
        }

        .card {
            color: white;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            background-blend-mode: multiply;
        }
        .card-body {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .sec {
            text-align: center;
            font-family: Arial Black;
            font-size: 90px;
            color: white;
            text-shadow: 5px 5px 0 rgb(8, 8, 8);
            background: linear-gradient(90deg, rgb(34, 9, 177), rgb(17, 73, 215));
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        /* Estilos para cada nivel de curso */
        .card-header-avanzado {
            background-color: #FF5733; /* Rojo */
            color: white;
            font-weight: bold;
        }
        .card-header-intermedio {
            background-color: #33FF57; /* Verde */
            color: white;
            font-weight: bold;
        }
        .card-header-basico {
            background-color: #33C1FF; /* Azul */
            color: white;
            font-weight: bold;
        }

        .search-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #f5f5f500; /* Fondo de respaldo si la imagen no carga */
            border-radius: 15px;
            padding: 20px;
            background-blend-mode: overlay;
        }
    </style>
@endsection

@section('js')
    <script>
        function filtrarCursos() {
            const nivel = document.getElementById('subjectFilter').value;
            const cursos = document.querySelectorAll('.curso-card');

            cursos.forEach(curso => {
                if (nivel === 'todos' || curso.getAttribute('data-nivel') === nivel) {
                    curso.style.display = 'block';
                } else {
                    curso.style.display = 'none';
                }
            });
        }

        function buscarCurso() {
            const query = document.getElementById('buscadorCursos').value.toLowerCase();
            const cursos = document.querySelectorAll('.curso-card');

            cursos.forEach(curso => {
                const nombreCurso = curso.querySelector('.card-header h5').textContent.toLowerCase();
                if (nombreCurso.includes(query)) {
                    curso.style.display = 'block';
                } else {
                    curso.style.display = 'none';
                }
            });
        }

        console.log('Página de capacitación para profesores cargada');
    </script>
@endsection


@section('css')
    <style>

        .header-box {
            background-color: orange;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        .header-box h1 {
            color: white;
            font-weight: bold;
            margin: 0;
        }


        .card {
            color: white;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            background-blend-mode: multiply;
        }
        .card-body {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
@endsection

@section('js')
    <script>
        console.log('Página de capacitación para profesores cargada');
    </script>
@endsection
