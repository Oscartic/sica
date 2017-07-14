@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.admin-nav')

        @include('partials.flash')
        <hr/>
        <h4><span class="glyphicon glyphicon-user"></span> MAD &raquo; Módulo Análisis Docente</h4><p><strong>Añadir nuevo Docente</strong></p>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-plus"></span> Crear Docente {{ $professor->nombre }}
            </div>
            <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                    {!! Form::model($professor, ['action' => 'admin\ProfessorController@store']) !!}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', old('nombre'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('rut', 'rut') !!}
                        {!! Form::text('rut', old('rut'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('titulo', 'Título') !!}
                        {!! Form::text('titulo', old('titulo'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'e-Mail') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('num_telefono', 'Numero Telefónico') !!}
                        {!! Form::text('num_telefono', old('num_telefono'), ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Añadir Docente', ['class' => 'btn btn-success pull-right']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection