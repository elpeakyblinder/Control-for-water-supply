<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <div class="header">
            <div class="">
                <img src="../img/pngfind.com-gota-de-agua-png-4591579 (1).png" alt="logo" />
            </div>
            <div class="divbotonesheader">
                <a href="{{ route('home') }}" class="dropbtn">Home</a>
                <a href="{{ route('admin') }}">Principal</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>
