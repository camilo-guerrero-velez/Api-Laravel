@extends('layout.base')
@section('title', 'inicio')
@section('content')
    <div class="card">
        <h5 class="card-header">Listado de Usuarios</h5>
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user['nombre'] }}</td>
                                <td>{{ $user['apellido'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['telefono'] }}</td>
                                <td>{{ $user['edad'] }}</td>
                                <td>
                                    <a href="{{ route('editar', ['id' => $user['id']]) }}"
                                        class="btn btn-outline-warning btn-sm">

                                        Editar
                                    </a>
                                </td>

                                <td>
                                    <form action="">
                                        <button class="btn btn-danger btn-sm" type="submit"> Eliminar </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
