<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <title>@yield('titulo')</title>
</head>

<body>

    <!---INICIO de la NAVBAR-->
    <nav class="navbar navbar-expand-lg" style="background-color: #AB886D;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #ffffff;">Principal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #ffffff;">Registro de libro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!---Fin de la NAVBAR-->

    <!---SECCION DE CONTENIDO-->
    @yield('cuerpo')

    <!--Inicio del footer-->
        <footer style="background-color: #ab886d;">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 text-center">
                        <h5 class="mb-3" style="letter-spacing: 2px; color: #ffffff;">Biblioteca de Alejandro</h5>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4 text-center">
                        <h5 class="mb-3" style="letter-spacing: 2px; color: #ffffff;">31 de Octubre de 2024</h5>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: #896d57; color: #ffffff;">
                © 2024 Copyright:Biblioteca de Alejandro
            </div>
            <!-- Copyright -->
        </footer>

    <!--FIN del footer-->

</body>

</html>