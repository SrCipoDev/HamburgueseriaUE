<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Hamburguesería UE es un proyecto de final de curso o TFG, desarrollado para mostrar los conocimientos absorvidos durante el curso. ">
    <meta name="author" content="Nerea Santos y Ángel Espinosa">
    <title>@yield('title', 'Hamburgueseria UE')</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- ESTILO PRINCIPAL DE LA WEB PUBLICA --->
    <link rel="stylesheet" href="{{ asset('css/style_principal.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>

<body id="home" data-spy="scroll">
    <a href="{{ route('index-admin') }}">Página principal</a>

    @yield('content')

    <!-- PIE DE PAGINA  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-5">
                <h3>Email</h3>
                <P class="text-muted">info@hamburgueseriagalicia.es</P>
            </div>
            <div class="col-sm-5">
                <h3>Teléfono</h3>
                <P class="text-muted"> 917 40 72 72 </P>
            </div>
            <div class="col-sm-5">
                <h3>Visitanos en...</h3>
                <P class="text-muted"> C. Tajo, s/n, 28670 Villaviciosa de Odón, Madrid </P>
            </div>
            <div class="col-sm-5">
                <h3><a class="button" href="{{ asset('plantilla-admin') }}">Acceso Administrador</h3></a>
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


</body>

</html>
