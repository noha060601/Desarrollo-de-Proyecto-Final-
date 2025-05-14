@extends('adminlte::page')

@section('title', 'Gestión de Charlas')

@section('content_header')
<div class="p-3 bg-dark text-white rounded shadow-sm">
    <h1 class="d-flex align-items-center">
        <i class="fas fa-book-open text-primary mr-2"></i>
        Charlas para el futuro y la educación
    </h1>
    <p class="text-muted mt-2">Accede a tus charlas y educación básica</p>
</div>
@endsection

@section('content')
<div class="card-content">
    <div class="row">
        @foreach ($charlas as $charla)
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center" style="border: 1px solid #ddd; border-radius: 10px; padding: 15px;">
                    <h3 class="card-title" style="font-size: 1.75rem; font-weight: bold; margin-bottom: 15px;">{{ $charla->tema }}</h3>
                    <img src="{{ asset('imagenes/director.PNG') }}" class="rounded-circle mx-auto" alt="Instructor" style="width: 80px; height: 80px; margin-bottom: 15px;">

                    <div class="card-body">
                        <p class="card-text text-muted">
                            <strong>Dirigida por:</strong> {{ $charla->profesor_nombre }} {{ $charla->profesor_apellido }}
                        </p>
                        <div class="mb-3 text-start">
                            <p class="fw-bold mb-2">Fecha:</p>
                            <p>{{ \Carbon\Carbon::parse($charla->fecha)->format('d/m/Y') }}</p>
                        </div>

                        <div class="d-flex justify-content-around mt-3">
                            <a href="#" class="btn btn-success"><i class="fas fa-comments"></i> Contactar</a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i> Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('css')
    <style>
        .card {
            box-shadow: 0px 4px 8px rgba(227, 5, 5, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-title {
            color: #333;
        }
        .card-body p {
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
        .btn {
            font-size: 0.9rem;
        }
        .list-unstyled li {
            font-size: 0.9rem;
            text-align: left;
            color: #333;
        }
    </style>
@endsection

@section('js')
    <script>
        console.log('Gestión de charlas cargada');
    </script>
@endsection


