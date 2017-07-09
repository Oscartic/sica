@extends('layouts.app')

@section('content')

    <div class="container">
        @include('partials.admin-nav')
        <h4><span class="glyphicon glyphicon-user"></span> MAD &raquo; Módulo Análisis Docente</h4>
        <h2>{{ $professor->nombre }}spa</h2>
        <i>{{ $professor->titulo }}</i><br>
        <span class="label label-primary">{{ $professor->mail }}</span>

        <h2>Capacitaciones</h2>
       <strong>Cursos de especialidad</strong>
        <ul>
            <li>Mantención de Sistemas propios y externos en arriendo.</li>
            <li>Contraparte de Administración y Optimización de Bases de Datos.</li>
            <li>Desarrollo de soluciones software para necesidades del Hospital.</li>
        </ul>

        <hr>

        <mad></mad>
        <h2>Evaluacion docente</h2>
        <hr/>
        <table>
            <tr>
                <th>
                    <p>La participación y el interés hacia los alumnos, el docente:</p>
                </th>
                <th>
                    <p>respecto de las tareas administrativas, el docente:</p>
                </th>
            </tr>
            <tr>
                <th>
                    <div id="canvas-holder">
                        <canvas id="chart-area3" width="600" height="300"></canvas>
                    </div>
                </th>
                <th>
                    <div id="canvas-holder">
                        <canvas id="chart-area2" width="300" height="300"></canvas>
                    </div>
                </th>
            </tr>
        </table>

    </div>

@endsection