@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.admin-nav')
        <hr/>
        <h4><span class="glyphicon glyphicon-th"></span>MAH » Módulo Análisis Horario</h4>
        <div class="col-md-12">
            <select class="form-control">
                <option>Juan Camilo Hernandez</option>
                <option>Juan Estevan Aponte</option>
                <option>Luis Piña</option>
                <option>Usuario Profesor</option>
            </select>
        </div>

        <schedule></schedule>

        <h3>Carga de horario docente</h3>
        <p><strong>A considera:</strong> El Docente pueden tener un máximo de 12 bloques diarios (Cerca de limite).</p>
        <div class="col-md-12">
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 65%">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
                <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
                    <span class="sr-only">20% Complete (warning)</span>
                </div>
                <div class="progress-bar progress-bar-danger" style="width: 10%">
                    <span class="sr-only">10% Complete (danger)</span>
                </div>
            </div>
        </div>
    </div>
@endsection