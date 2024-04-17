@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    </head>

    <div class="formulario">
        <h3 class="gradiante">
            Editar Usuario:
        </h3>


        <form action="{{ route('updateUser', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ $usuario->name }}" required>

            <label for="surname">Apellido:</label>
            <input type="text" id="surname" name="surname" value="{{ $usuario->surname }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $usuario->email }}" required>

            <label for="address">Dirección:</label>
            <input type="text" id="address" name="address" value="{{ $usuario->address }}" required>

            <label for="alias">Alias:</label>
            <input type="text" id="alias" name="alias" value="{{ $usuario->alias }}" required>

            <label for="postal_code">Código Postal:</label>
            <input type="text" id="postal_code" name="postal_code" value="{{ $usuario->postal_code }}" required>

            <label for="role">Rol:</label>
            <select id="role" name="role" required>
                <option value="cliente" {{ $usuario->role == 'cliente' ? 'selected' : '' }}>Cliente</option>
                <option value="administrador" {{ $usuario->role == 'administrador' ? 'selected' : '' }}>
                    Administrador</option>
            </select>

            <button type="submit">Guardar Cambios</button>
        </form>

    </div>
@endsection
