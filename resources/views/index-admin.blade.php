@extends('layouts.plantilla-admin')
@section('title')

@section('content')
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
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categorias') }}">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Productos</a>
                </li>
            </ul>

            <!--LOGO HAMBURGUESERIA-->
            <a class="navbar-brand m-auto" href="#home">
                <!--<img style="width: 10em;" src="img/Logo-Hamburgueseria UE2.png" class="brand-img" alt="logo de nuestra hamburgueseria galicia">-->
                <span class="brand-txt">Hamburguesaria UE</span>
            </a>

            <!--MENU LATERAL DRCH-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button" href="{{ route('login') }}">Inicio Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button" href="{{ route('register') }}">Registrate</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- HEADER -->

    <!-- CONTACTO  -->
    <div id="contacto" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <iframe style="width: 100%; height: 100%; min-height: 400px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.614984478736!2d-3.9216577234464958!3d40.373060671446595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd419031a94d45e5%3A0x375a8b6ca7a1dc4c!2sUniversidad%20Europea%20de%20Madrid!5e0!3m2!1ses!2ses!4v1709939445078!5m2!1ses!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>Hamburgueseria UE</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, laboriosam doloremque odio delectus, sunt
                    magnam laborum impedit molestiae, magni quae ipsum, ullam eos! Alias suscipit impedit et, adipisci illo
                    quam.</p>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span> C. Tajo, s/n, 28670 Villaviciosa de Odón, Madrid </p>
                    <p><span class="ti-support pr-3"></span> 917 40 72 72 </p>
                    <p><span class="ti-email pr-3"></span>info@hamburgueseriagalicia.es</p>
                </div>
            </div>
        </div>
    </div>
    <hr>

@endsection()
