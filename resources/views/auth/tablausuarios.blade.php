@extends('layouts.app')

@section('title', 'Usuarios Registrados')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    </head>
    <article>
        <div class="modal">
            <div id="modalUsuarios">
                <div>
                    <h2 class="gradiante">
                        Usuarios registrados:
                    </h2>
                    <div class="table-container">
                        <div class="table-border">
                            <table id="tablaUsuarios">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Dirección</th>
                                        <th>Alias</th>
                                        <th>Código Postal</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->name }}</td>
                                            <td>{{ $usuario->surname }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->address }}</td>
                                            <td>{{ $usuario->alias }}</td>
                                            <td>{{ $usuario->postal_code }}</td>
                                            <td>{{ $usuario->role }}</td>
                                            <td>
                                                <div class="buttons">
                                                    <form action="{{ route('deleteUser', $usuario->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="delete-btn" type="submit">Eliminar</button>
                                                    </form>
                                                    <form action="{{ route('editUser', $usuario->id) }}" method="GET">
                                                        <button class="update-btn" type="submit">Editar</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
