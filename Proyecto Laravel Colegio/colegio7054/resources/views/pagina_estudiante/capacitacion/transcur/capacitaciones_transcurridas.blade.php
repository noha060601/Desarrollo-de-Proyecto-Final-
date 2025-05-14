@extends('adminlte::page')

@section('title', 'Gestión de Cursos')

@section('content_header')
<div class="p-3 bg-dark text-white rounded shadow-sm">
    <h1 class="d-flex align-items-center">
        <i class="fas fa-book-open text-primary mr-2"></i>
        Lista de cursos transcurridos
    </h1>
    <p class="text-muted mt-2">Accede a tu historial de cursos</p>
</div>
@endsection

@section('content')
    <div class="card-content">
        <div class="card">
            <div class="card-body">
                <table id="cursos-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nombre del Curso</th>
                            <th>Descripción</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Fin</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transcurrido as $curso)
                            <tr>
                                <td>{{ $curso->Nombre_Curso }}</td>
                                <td>{{ $curso->Descripcion_Curso }}</td>
                                <td>{{ $curso->Fecha_Inicio }}</td>
                                <td>{{ $curso->Fecha_Fin }}</td>
                                <td>{{ $curso->Nota }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script>
        $(document).ready(function() {
            $('#cursos-table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        text: 'Descargar en PDF',
                        titleAttr: 'Descargar en PDF',
                        className: 'btn btn-danger'
                    },
                    'print'
                ]
            });
        });
    </script>
@endsection

