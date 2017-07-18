@extends('layouts.app')

@section('content')

    <div class="container">
        @include('partials.admin-nav')
        <h4><span class="glyphicon glyphicon-user"></span> MAD &raquo; Módulo Análisis Docente</h4>
        <h2>{{ $professor->nombre }}</h2>
        <p><strong>Titulo:</strong> {{ $professor->titulo }} | <strong>Rut:</strong> {{ $professor->rut }} | <strong>e-Mail:</strong> {{ $professor->email }}</p>
        <hr>
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cursos y capacitaciones</h3>
                    </div>

                    <course id_profe="{{$professor->id}}"></course>

                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Gestión Docente</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            componente tareas
                        </div>
                        <div class="col-md-6">
                            <agreements id_profe="{{ $professor->id }}"></agreements>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <h2>Evaluacion docente</h2>
        <hr/>
       <h4>Proximamente...</h4>
    </div>

@endsection