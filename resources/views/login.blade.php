<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="">
                <img src="../img/pngfind.com-gota-de-agua-png-4591579 (1).png" alt="logo" />
            </div>
            <div class="divbotonesheader">
                <a href="{{ route('home') }}" class="dropbtn">Home</a>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="formulario">
                <h1 class="gradiante">
                    Ingresa tus credenciales
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
                <form action="/login" method="post">
                    @csrf
                    <div class="form">
                        <div>
                            <label for="email">Correo electrónico:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div>
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="button">
                            <button class="botones" type="submit">Iniciar sesion</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </main>
</body>

</html>
