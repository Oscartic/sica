@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <h4>Tareas Asignadas</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span>Recuperación de clases</span> |  Académica | <small>04,02,2017</small>
                            <br>
                            <small>Estado:</small>
                            <span class="label label-warning">Pendiente</span>
                        </li>

                        <li class="list-group-item">
                            <span>Recibir equipos de sala</span> | Administrativa | <small>13,05,2017</small>
                            <br>
                            <small>Estado:</small>
                            <span class="label label-warning">Pendiente</span>
                        </li>

                        <li class="list-group-item">
                            <span>Dirigir "los genios nunca duermen" </span> Extracurricular | <small>23,06,2017</small>
                            <br>
                            <small>Estado:</small>
                            <span class="label label-warning">Pendiente</span>
                        </li>

                        <li class="list-group-item">
                            <span>Ver notas</span> |  Académica | <small>11,07,2017</small>
                            <br>
                            <small>Estado:</small>
                            <span class="label label-warning">Pendiente</span>
                        </li>
                    </ul>
                    <div class="list-group">
                        <h4>Acuerdos</h4>
                        <p><strong>Compromiso de puntualidad</strong> <br>
                            El docente se compromete en llegar a la hora de inicio de clases y
                            evitar los constantes retrasos que ha presentado en sus ramos.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
