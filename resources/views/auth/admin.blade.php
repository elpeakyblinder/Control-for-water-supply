<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administración</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <header>
        <div class="header">
            <div class="">
                <img src="../img/pngfind.com-gota-de-agua-png-4591579 (1).png" alt="logo" />
            </div>
            <div class="divbotonesheader">
                <a href="{{ route('home') }}"">Home</a>
                <a href="{{ route('register') }}">Registrar usuario</a>
                <a href="{{ route('table') }}">Usuarios</a> {{-- aqui se podra ver una tabla con todos los usuarios registrados y se podrá eliminar y modificar los mismos --}}
                <a id="registerhouse">
                    Registrar casa
                </a>
                <a href="{{ route('logout') }}">Logout</a>
                {{-- <button onclick="togglePump()">Toggle Bomba de Agua</button> --}}
            </div>
        </div>
    </header>


    <main>
        <h2 class="gradiante">
            Bienvenido, {{ Auth::user()->name }}
        </h2>

        <article class="graficas">
            <canvas id="chart"></canvas>
        </article>

        {{-- este formulariom será un modal --}}
        <div class="modal">
            <div id="modal">
                <div class="formulario">
                    <h3 class="gradiante">
                        Registra casa:
                    </h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <span class="close">&times;</span>
                    <form method="POST" action="/registerHouse">
                        @csrf
                        <div>
                            <label for="nombre">Nombre de la casa:</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div>
                            <label for="direccion">Dirección de la casa:</label>
                            <input type="text" id="direccion" name="direccion" required>
                        </div>
                        <div>
                            <label for="alias">Alias del usuario:</label>
                            <input type="text" id="alias" name="alias" required>
                        </div>
                        <div class="button">
                            <button class="botones" type="submit">Iniciar sesion</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </main>

</body>
<script src="{{ asset('js/modal.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/graficas.js') }}"></script>
<script>
    function togglePump() {
        fetch('/toggle-pump', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ status: 1 }) // Cambia esto a 0 para apagar la bomba
        });
    }
    </script>
</html>
