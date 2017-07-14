@extends('layouts.app')

@section('content')
    <div class="container">
        @include('../partials.admin-nav')
        <hr/>
        <h4> Zona de administracion &raquo; SICA</h4>
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-cog"></span> Gestión Usuarios y roles
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-user"></span> Usuarios
                        </div>

                        <table class="table table-bordered table-striped responsive-utilities">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Usuario</th>
                                <th>email</th>
                                <th>Rol</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role_id }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-tags"></span> Roles
                        </div>

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
                                    <td width="30%">{{ $role->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
