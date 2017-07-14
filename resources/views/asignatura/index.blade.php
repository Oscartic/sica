@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.admin-nav')
        <hr/>
        <h4><span class="glyphicon glyphicon-user"></span> MAD &raquo; Módulo Análisis Docente</h4>
        @include('partials.flash')
        {{ link_to_action('admin\SubjectController@create','Agregar Asignatura', [],['class' => 'btn-xs btn-success pull-right', 'style' => 'margin: 12px 5px']) }}
        {{--{{ link_to_action('ImportController@index','Cargar Datos', [],['class' => 'btn btn-success pull-right']) }}--}}
        <div class="panel panel-default">
            <div class="panel-heading">
                Asignaturas
            </div>
            <table class="table table-bordered table-striped responsive-utilities">
            <thead>
                <tr>
                    <th>Código</th>
                    <th><span class="glyphicon glyphicon-sort-by-alphabet"></span> Asignatura</th>
                    <th>Requisitos</th>
                    <th>Horas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @forelse($subjects as $subject)
                <tr>
                    <td>{{ $subject->cod }}</td>
                    <td>{{ $subject->asignatura }}</td>
                    <td>{{ $subject->requisitos }}</td>
                    <td>{{ $subject->horas }}</td>
                    <td width="5%">
                        {{
                            link_to_action('admin\SubjectController@edit','Editar',['id' => $subject->id],['class' => 'btn btn-info'])
                        }}
                    </td>
                    <th width="5%">
                        @if($subject->trashed())
                            {!! Form::open(['method' => 'PATCH', 'route' =>['asignatura.restore', $subject->id]]) !!}
                            {!! Form::submit('Restaurar',['class' => 'btn btn-block btn-info']) !!}
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['method' => 'DELETE', 'route' =>['asignatura.destroy', $subject->id]]) !!}
                            {!! Form::submit('Eliminar',['class' => 'btn btn-block btn-danger']) !!}
                            {!! Form::close() !!}
                        @endif
                    </th>
                </tr>
            @empty
                <tr>
                    <th colspan="6" class="alert alert-danger">No hay Asignaturas</th>
                </tr>
            @endforelse
                </tbody>
        </table>
        </div>
        @if($subjects)
            {{ $subjects->links() }}
        @endif
    </div>
@endsection