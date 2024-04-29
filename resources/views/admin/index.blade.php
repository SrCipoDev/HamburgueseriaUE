@extends('layouts.plantilla-admin')
@section('title, Hamburgueseria UE')

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
                    <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Ingredientes</a>
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



    <hr>
    <p style="padding-top:100px;"></p>
@endsection()
