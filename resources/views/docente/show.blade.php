@extends('layouts.app')

@section('content')

    <div class="container">
        @include('partials.admin-nav')
        <h4><span class="glyphicon glyphicon-user"></span> MAD &raquo; Módulo Análisis Docente</h4>
        <h2>{{ $professor->nombre }}</h2>
        <p><strong>Titulo:</strong> {{ $professor->titulo }} | <strong>Rut:</strong> {{ $professor->rut }} | <strong>e-Mail:</strong> {{ $professor->email }}</p>
        <hr>
        <mad-admin></mad-admin>
        <h2>Evaluacion docente</h2>
        <hr/>
       <h4>Proximamente...</h4>
    </div>

@endsection