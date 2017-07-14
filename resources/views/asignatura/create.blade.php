@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.admin-nav')

        @include('partials.flash')
        <hr/>

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
                <span class="glyphicon glyphicon-plus"></span> Agregar nueva Asignatura
            </div>
            <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                    {!! Form::model($subject, ['action' => 'admin\SubjectController@store']) !!}

                    <div class="form-group">
                        {!! Form::label('cod', 'Codigo') !!}
                        {!! Form::text('cod', old('cod'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('asignatura', 'Asignatura') !!}
                        {!! Form::text('asignatura', old('asignatura'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('nivel', 'Nivel') !!}
                        {!! Form::text('nivel', old('nivel'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('optativa', 'Optativa') !!}
                        {!! Form::text('optativa', old('optativa'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('tipo', 'Tipo') !!}
                        {!! Form::text('tipo', old('tipo'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('horas', 'Horas') !!}
                        {!! Form::text('horas', old('horas'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('requisitos', 'Requisitos') !!}
                        {!! Form::text('requisitos', old('requisitos'), ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Añadir Asignatura', ['class' => 'btn btn-success pull-right']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection