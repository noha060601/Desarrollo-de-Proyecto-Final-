@extends('adminlte::page')

@section('title', 'capacitacion')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Eventos </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">capacitacion</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <style>
        .calendario {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .cabecera {
            text-align: center;
            margin-bottom: 10px;
        }

        .dias-semana div {
            display: inline-block;
            width: 40px;
            text-align: center;
        }

        .dias div {
            display: inline-block;
            width: 40px;
            height: 40px;
            text-align: center;
            border: 1px solid #ccc;
        }
    </style>
@endsection

@section('content')
    <div class="content">
        <div class="card ">
            <div class="row">
                <div class="col-md-3">
                    <div class="sticky-top mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Eventos de semana </h4>
                            </div>
                            <div class="card-body">
                                <div id="external-events">
                                    <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">recreo</div>
                                    <div class="external-event bg-warning ui-draggable ui-draggable-handle" style="position: relative;">para casa</div>
                                    <div class="external-event bg-info ui-draggable ui-draggable-handle" style="position: relative;">tarea</div>
                                    <div class="external-event bg-primary ui-draggable ui-draggable-handle" style="position: relative;">trabajos creativos </div>
                                    <div class="external-event bg-danger ui-draggable ui-draggable-handle" style="position: relative;">no dormir</div>
                                                <div class="checkbox">
                                                    <label for="drop-remove">
                                                        <input type="checkbox" id="drop-remove">
                                                        retirar
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Crear eventos </h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                                <ul class="fc-color-picker" id="color-chooser">
                                                    <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                                    <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                                    <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                                    <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                                    <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                                </ul>
                                            </div>

                                            <div class="input-group"><input id="new-event" type="text" class="form-control" placeholder="Event Title">
                                            <div class="input-group-append">
                                                <button id="add-new-event" type="button" class="btn btn-primary">Agregar </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>



@endsection
