@extends('layouts.app')

@section('title', 'Usuarios Registrados')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    </head>

    <section>
        <div class="formulario">
            <h1 class="gradiante">
                Registra un usuario:
            </h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/register" method="post">
                @csrf
                <label for="name">Nombres:</label>
                <input type="text" id="name" name="name" required>

                <label for="surname">Apellidos:</label>
                <input type="text" id="surname" name="surname" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>

                <div class="row">
                    <div>
                        <label for="alias">Alias:</label>
                        <input type="text" id="alias" name="alias" required>
                    </div>

                    <div>
                        <label for="role">Rol:</label>
                        <select id="role" name="role" required>
                            <option value="cliente">Cliente</option>
                            <option value="administrador">Administrador</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <label for="address">Dirección:</label>
                        <input type="text" id="address" name="address" required>
                    </div>

                    <div>
                        <label for="postal_code">C.P:</label>
                        <input type="text" id="postal_code" name="postal_code" required>
                    </div>

                </div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <div class="button">
                    <button class="botones" type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </section>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

@endsection
