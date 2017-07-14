@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.admin-nav')
        <hr>
        <table class="table table-bordered table-striped responsive-utilities">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Rol</th>
                    <th>Creación</th>
                </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection