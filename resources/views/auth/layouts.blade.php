<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta name="description"
        content="Hamburguesería UE es un proyecto de final de curso o TFG, desarrollado para mostrar los conocimientos absorvidos durante el curso. ">
    <meta name="author" content="Nerea Santos y Ángel Espinosa">
    <title>@yield('title', 'Hamburgueseria UE')</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- ESTILO PRINCIPAL DE LA WEB PUBLICA --->
    <link rel="stylesheet" href="{{ asset('css/style_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carta.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body id="home" data-spy="scroll">

    <!-- MENU -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!--navbar-button button-->
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <!--MENU LATERAL IZQ-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}#about">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}#menu">Nuestra Carta</a>
                </li>
            </ul>

            <!--LOGO HAMBURGUESERIA-->
            <a class="navbar-brand m-auto" href="{{ route('index') }}#home">
                <!--<img style="width: 10em;" src="img/Logo-Hamburgueseria UE2.png" class="brand-img" alt="logo de nuestra hamburgueseria galicia">-->
                <span class="brand-txt">Hamburguesaria UE</span>
            </a>

            <!--MENU LATERAL DRCH-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link button {{ request()->is('login') ? 'active' : '' }}"
                            href="{{ route('login') }}">Inicio Sesión</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link button {{ request()->is('register') ? 'active' : '' }}"
                            href="{{ route('register') }}">Registrate</a>
                    </li>
                @else
                </ul>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu navbar-nav">
                        <li class="nav-item dropdown"><a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Desconectarse
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    @endguest
    </ul>
    </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="contenido-principal">
                @yield('content')
                <div class="row justify-content-center text-center mt-3">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PIE DE PAGINA  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-5">
                <h3>Email</h3>
                <P class="text-muted"><a href="mailto:info@hamburgueseriagalicia.es">info@hamburgueseriagalicia.es</a>
                </P>
            </div>
            <div class="col-sm-5">
                <h3>Teléfono</h3>
                <P class="text-muted"> <a href="tel:917407272">917 40 72 72</a></P>
            </div>
            <div class="col-sm-5">
                <h3>Visitanos en...</h3>
                <P class="text-muted"> C. Tajo, s/n, 28670 Villaviciosa de Odón, Madrid </P>
            </div>
            <div class="col-sm-5">
                <p><a class="button" href="{{ route('admin.index') }}">Acceso Administrador</p></a>
            </div>
        </div>
    </div>
    <!-- BARRA DERECHOS RESERVADOS -->
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright
            <script>
                document.write(new Date().getFullYear())
            </script> By <a href="">Nerea Santos y Angel Espino</a>
        </p>
    </div>

    <!-- BOOTSTRAP  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


</body>

</html>
