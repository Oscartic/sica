@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.admin-nav')
        <hr/>
        <h4><span class="glyphicon glyphicon-user"></span> MAD &raquo; Módulo Análisis Docente</h4>
        @include('partials.flash')
        {{ link_to_action('admin\ProfessorController@create','Crear Docente', [],['class' => 'btn-xs btn-success pull-right', 'style' => 'margin:12px 5px']) }}
        <div class="panel panel-default">
            <div class="panel-heading">
                Docentes
            </div>
            <table class="table table-bordered table-striped responsive-utilities">
            <thead>
            <tr>
                <th><span class="glyphicon glyphicon-sort-by-alphabet"></span> Nombre</th>
                <th>Rut</th>
                <th>e-Mail</th>
                <th>Tel.</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            @forelse($professors as $professor)
                <tr>

                    <td> {{ link_to_action('admin\ProfessorController@show',$professor->nombre, ['id' => $professor->id],['class' => 'profile']) }}</td>
                    <td>{{ $professor->rut }}</td>
                    <td>{{ $professor->email }}</td>
                    <td>{{ $professor->num_telefono }}</td>
                    <td width="5%">
                        {{
                            link_to_action('admin\ProfessorController@edit','Editar',['id' => $professor->id],['class' => 'btn btn-info'])
                        }}
                    </td>
                    <th width="5%">
                        @if($professor->trashed())
                            {!! Form::open(['method' => 'PATCH', 'route' =>['docente.restore', $professor->id]]) !!}
                            {!! Form::submit('Restaurar',['class' => 'btn btn-block btn-info']) !!}
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['method' => 'DELETE', 'route' =>['docente.destroy', $professor->id]]) !!}
                            {!! Form::submit('Eliminar',['class' => 'btn btn-block btn-danger']) !!}
                            {!! Form::close() !!}
                        @endif
                    </th>
                </tr>
            @empty
                <tr>
                    <th colspan="6" class="alert alert-danger">No hay docentes</th>
                </tr>
            @endforelse
            </tbody>
        </table>
        </div>
        @if($professors)
            {{ $professors->links() }}
        @endif
    </div>
@endsection