@extends('layouts.plantilla')
@section('title')

@section('content')


    <!-- HEADER -->
    <header id="home" class="header slider">
        <!-- SLIDER -->
        <div id="sliderHome" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!--PRIMERA IMG SLIDER-->
                <div class="carousel-item active">
                    <img class="d-block slider-img w-100" src="img/img-slider-3.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h1 class="">Hamburgueseria UE</h1>
                        <br>
                        <h2 class="">Pide &amp; Disfruta</h2>
                        <br>
                        <a class="slider-button button" href="{{ route('carta.index') }}">Realiza tu pedido</a>
                    </div>
                </div>

                <!--SEGUNDA IMG SLIDER-->
                <div class="carousel-item">
                    <img class="d-block slider-img w-100" src="img/Hamburguesa_slider_7.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <h1 class="">Hamburgueseria UE</h1>
                        <br>
                        <h2 class="">Pide &amp; Disfruta</h2>
                        <br>
                        <a class="slider-button button" href="{{ route('carta.index') }}">Realiza tu pedido</a>
                    </div>
                </div>

                <!--BOTONES ANTERIOR SLIDER-->
                <a class="carousel-control-prev" href="#sliderHome" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <!--BOTONES SIGUIENTE SLIDER-->
                <a class="carousel-control-next" href="#sliderHome" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div> <!-- FIN SLIDER -->
    </header>
    <div class="container-fluid">
        <!--  SOBRE NOSOTROS  -->
        <div id="about" class="container-fluid wow fadeIn background-white about" data-wow-duration="1.5s">
            <div class="row">
                <!-- COLUMNA DE LA IZQUIERDA CON LA IMAGEN-->
                <div class="col-md-6">
                    <img class="img-fluid w-100" src="img/Hamburguesa_fondo_blanco.jpg" alt="" />
                </div>
                <!-- COLUMNA DE LA CERECHA CON EL TEXTO-->
                <div class="col-md-6 p-0 d-flex align-items-center justify-content-center">
                    <div class="p-5" section-about>
                        <div class="col-sm-15 py-2 my-2">
                            <h2 class="mb-4">Sobre Nosotros</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quisquam accusantium
                                nostrum modi, nemo, officia veritatis ipsum facere maxime assumenda voluptatum enim! Labore
                                maiores placeat impedit, vero sed est voluptas!Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Expedita alias dicta autem, maiores doloremque quo perferendis, ut
                                obcaecati
                                harum, <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum necessitatibus
                                iste,
                                nulla recusandae porro minus nemo eaque cum repudiandae quidem voluptate magnam voluptatum?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--  FIN SOBRE NOSOTROS  -->


        <!-- NUESTRA CARTA HAMBURGUESERIA UE -->
        <div id="menu" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
            <h2 class="section-title py-5"><a class="nav-link" href="{{ route('carta.index') }}">NUESTRA CARTA</h2></a>
            <div class="row justify-content-center">
                <div class="col-sm-15 col-md-15 mb-15">
                    <!--CATEGORIAS DE HAMBURGUESERIA UE-->
                    <ul class="nav nav-pills mb-15 py-3" id="pills-tab" role="tablist">
                        @foreach ($categorias as $categoria)
                            <li class="nav-item">
                                <a class="nav-link @if ($categoriaSeleccionada == $categoria->nombre_categoria) active @endif"
                                    id="pills-{{ Illuminate\Support\Str::slug($categoria->nombre_categoria) }}-tab"
                                    data-toggle="pill"
                                    href="#categoria-{{ Illuminate\Support\Str::slug($categoria->nombre_categoria) }}"
                                    role="tab" aria-controls="pills-home"
                                    aria-selected="{{ $categoriaSeleccionada == $categoria->nombre_categoria }}">
                                    {{ $categoria->nombre_categoria }}
                                </a>
                            </li>
                        @endforeach
                    </ul> <!-- FIN DE MOSTRAR CATEGORIAS DE HAMBURGUESERIA UE -->
                </div>
            </div>

            <!-- PRODUCTOS DE CADA CATEGORIA -->
            <div id="pills-tabContent" class="tab-content">
                @foreach ($categorias as $categoria)
                    <div id="categoria-{{ Illuminate\Support\Str::slug($categoria->nombre_categoria) }}"
                        class="tab-pane fade @if ($categoriaSeleccionada == $categoria->nombre_categoria) show active @endif" role="tabpanel"
                        aria-labelledby="pills-{{ Illuminate\Support\Str::slug($categoria->nombre_categoria) }}-tab">
                        <div class="row">
                            @foreach ($categoria->productos as $producto)
                                <div class="col-md-4 my-3 my-md-0">
                                    <div class="card bg-transparent border mb-4">
                                        <img src="{{ $producto->ruta_imagen }}" alt="{{ $producto->nombre_producto }}"
                                            class="rounded-0 card-img-top mg-responsive">
                                        <div class="card-body">
                                            <h4 class="pt20 pb20 text-white">{{ $producto->nombre_producto }}</h4>
                                            <p class="text-white">{{ $producto->descripcion_producto }}</p>
                                            <p class="text-white">{{ $producto->precio_producto }}€</p>
                                            <div class="d-flex justify-content-center">
                                                <!-- Contenedor para centrar horizontalmente -->
                                                @if (auth()->check())
                                                    <input type="number" name="cantidad" min="1"
                                                        style="width: 40px;" value="1">
                                                    <button type="submit" class="nav-link button" value="anadircarrito"> +
                                                        Añadir al carrito</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div> <!-- FIN MOSTRAR PRODUCTOS DE CADA CATEGORIA-->
        </div> <!-- FIN NUESTRA CARTA HAMBURGUESERIA UE -->



        <!-- CONTACTO  -->
        <div id="contacto" class="container-fluid bg-dark text-light border-top wow fadeIn">
            <div class="row py-5">
                <div class="col-md-6 px-0">
                    <iframe style="width: 100%; height: 100%; min-height: 400px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.614984478736!2d-3.9216577234464958!3d40.373060671446595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd419031a94d45e5%3A0x375a8b6ca7a1dc4c!2sUniversidad%20Europea%20de%20Madrid!5e0!3m2!1ses!2ses!4v1709939445078!5m2!1ses!2ses"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="col-md-6 px-5 has-height-lg middle-items">
                    <h3>Hamburgueseria UE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, laboriosam doloremque odio
                        delectus, sunt
                        magnam laborum impedit molestiae, magni quae ipsum, ullam eos! Alias suscipit impedit et,
                        adipisci illo
                        quam.</p>
                    <div class="text-muted">
                        <p><span class="ti-location-pin pr-3"></span> C. Tajo, s/n, 28670 Villaviciosa de Odón, Madrid
                        </p>
                        <p><span class="ti-support pr-3"></span> 917 40 72 72 </p>
                        <p><span class="ti-email pr-3"></span>info@hamburgueseriagalicia.es</p>
                    </div>
                </div>
            </div>
        </div> <!-- FIN CONTACTO -->
    </div>

@endsection()
