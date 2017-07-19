@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.admin-nav')
        <hr/>
        <h4><span class="glyphicon glyphicon-education"></span> SICA - Universidad Tecnológica de Chile</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="glyphicon glyphicon-list-alt"></span> Zona de gestión académica</div>
                    <div class="panel-body">
                        <!--MAD-->
                        <div class="col-md-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-user"></span> MAD &raquo; Módulo Análisis Docente
                                </div>
                                <div class="panel-body">
                                    <p><strong>Área de gestión academica</strong><br>
                                        Asignación de tareas y registro de compromisos<br>
                                        Historial de capacitaciones</p>
                                    <ul class="admin-option-panel">
                                        <li><span class="glyphicon glyphicon-chevron-right"></span>  {{ link_to_action('admin\ProfessorController@index','Docentes') }}</li>
                                        <li><span class="glyphicon glyphicon-chevron-right"></span>  {{ link_to_action('admin\SubjectController@index','Asignaturas') }}</li>
                                    </ul>

                                </div>
                                <div class="panel-footer">

                                </div>
                            </div>
                        </div>

                        <!--MAH-->
                        <div class="col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-th"></span> MAH &raquo; Módulo Analisis Horarios
                                </div>
                                <div class="panel-body">
                                        <p><strong>Espacios de horarios</strong><br>
                                            Tomar horarios de secciones y ver disponibilidad <br>
                                            Cruzar horarios para ver disponibilidad</p>
                                    <ul class="admin-option-panel">
                                        <li><span class="glyphicon glyphicon-chevron-right"></span>  <a href="{{ url('horario') }}">Horario Docentes</a></li>
                                        <li><span class="glyphicon glyphicon-chevron-right"></span>  <a href="#">Bloques</a></li>
                                    </ul>
                                </div>
                                <div class="panel-footer">

                                </div>
                            </div>
                        </div>

                        <!--MAN-->
                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-ok"></span> MAN &raquo; Módulo Análisis Notas
                                </div>
                                <div class="panel-body">
                                    <dl>
                                        <dt>ART 28 Atrasos de Notas</dt>
                                        <dt>Promedio de notas por evaluación, sección, asignatura según valor de referencia</dt>
                                        <dt>Tendencia de histórico de promedio notas</dt>
                                        <dt>Contabilizador de modificador de notas por sección por docente, histórico</dt>
                                        <dt>Promedio de notas por sección, para determinar RR y AA</dt>
                                    </dl>

                                </div>
                                <div class="panel-footer">

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


@endsection