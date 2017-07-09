@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.admin-nav')

        @include('partials.flash')
        <hr/>
        <h4><span class="glyphicon glyphicon-user"></span> MAD &raquo; Módulo Análisis Docente</h4>
        <p><strong>Editar Docente {{ $professor->nombre }} </strong></p>

    @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model(
            $professor,
            [
            'route' => ['docente.update', $professor->id],
            'class' => 'form-horizontal',
            'method' => 'PUT',
            'id' => 'edit-pizza'
            ])
        !!}

        {{ Form::hidden('id',$professor->id) }}

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('rut', 'rut') !!}
                {!! Form::text('rut', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('titulo', 'Titulo') !!}
                {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'e-Mail') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('num_telefono', 'Numero Telefónico') !!}
                {!! Form::text('num_telefono', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Editar Docente', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}

    </div>
@endsection