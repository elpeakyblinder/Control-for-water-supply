<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/usuario.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="">
                <img src="../img/pngfind.com-gota-de-agua-png-4591579 (1).png" alt="logo" />
            </div>
            <div class="divbotonesheader">
                <a href="{{ route('home') }}"">Home</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </header>
    <h2 class="gradiante">
        Bienvenido, {{ Auth::user()->name }}
    </h2>


    <article class="graficas">
        <div>
            <p>aqui podrás ver la grafica de su consumo de agua de agua</p>
        </div>
        <canvas id="chartUser"></canvas>
    </article>

</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/graficaUsuario.js') }}"></script>
</html>
