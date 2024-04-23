@extends('layouts.plantilla')
@section('title')

@section('content')
    <!-- MENU -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix"> 

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!--navbar-button button-->
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"> 
            <!--MENU LATERAL IZQ-->
            <ul class="navbar-nav"> 
                <li class="nav-item"> 
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Nuestra Carta</a>
                </li>
            </ul>

            <!--LOGO HAMBURGUESERIA-->
            <a class="navbar-brand m-auto" href="index.html">
                <!--<img style="width: 10em;" src="img/Logo-Hamburgueseria UE2.png" class="brand-img" alt="logo de nuestra hamburgueseria galicia">-->
                <span class="brand-txt">Hamburguesaria UE</span> 
            </a>
            
            <!--MENU LATERAL DRCH-->
            <ul class="navbar-nav"> 
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button" href="iniciosesion.html">Inicio Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button" href="registro.html" >Registrate</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- HEADER -->
    <!-- SLIDER -->
    <header id="home" class="header slider">
        <div id="sliderHome" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!--PRIMERA IMG SLIDER-->
                <div class="carousel-item active">
                    <img class="d-block slider-img w-100" src="img/img-slider-3.jpg" alt="First slide">
                        <div class="carousel-caption">
                            <h1 class="">Hamburgueseria UE</h1>
                            <h2 class="">Pide &amp; Disfruta</h2>
                            <a class="slider-button button" href="#menu">Realiza tu pedido</a>
                        </div>
                </div>
                <!--SEGUNDA IMG SLIDER-->
                <div class="carousel-item">
                    <img class="d-block slider-img w-100" src="../img/Hamburguesa_slider_5.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <h1 class="">Hamburgueseria UE</h1>
                        <h2 class="">Pide &amp; Disfruta</h2>
                        <a class="slider-button button" href="#menu">Realiza tu pedido</a>
                    </div>
                </div>
                <!--TERCERA IMG SLIDER-->
                <div class="carousel-item">
                    <img class="d-block slider-img w-100" src="../img/tiramisu.jpg" alt="Third slide">
                    <div class="carousel-caption">
                        <h1 class="">Hamburgueseria UE</h1>         
                        <h2 class="">Pide &amp; Disfruta</h2>            
                        <a class="slider-button button" href="#menu">Realiza tu pedido</a>  
                    </div>
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
    </header>    

    <!--  SOBRE NOSOTROS  -->
    <div id="about" class="container-fluid wow fadeIn background-white" data-wow-duration="1.5s">
        <div class="row">
            <!-- COLUMNA DE LA IZQUIERDA CON LA IMAGEN-->
            <div class="col-md-6"> 
                <img class="img-fluid w-100" src="../img/Hamburguesa_fondo_blanco.jpg" alt="" />
            </div>
            <!-- COLUMNA DE LA CERECHA CON EL TEXTO-->
            <div class="col-md-6 p-0">
                <div class="p-5">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">Sobre Nosotros</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quisquam accusantium nostrum modi, nemo, officia veritatis ipsum facere maxime assumenda voluptatum enim! Labore maiores placeat impedit, vero sed est voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita alias dicta autem, maiores doloremque quo perferendis, ut obcaecati harum, <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum necessitatibus iste,
                        nulla recusandae porro minus nemo eaque cum repudiandae quidem voluptate magnam voluptatum? <br>Nobis, saepe sapiente omnis qui eligendi pariatur. quis voluptas. Assumenda facere adipisci quaerat. Illum doloremque quae omnis vitae.</p>
                        <p><b>Lonsectetur adipisicing elit. Blanditiis aspernatur, ratione dolore vero asperiores explicabo.</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ab itaque modi, reprehenderit fugit soluta, molestias optio repellat incidunt iure sed deserunt nemo magnam rem explicabo vitae. Cum, nostrum, quidem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MENU HAMBURGUESERIA GALICIA -->
    <div id="menu" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">NUESTRA CARTA</h2>
        <div class="row justify-content-center">
            <div class="col-sm-7 col-md-4 mb-5">
                <!--CATEGORIAS DE NUESTRA HAMBURGUESERIA-->
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#hamburguesas" role="tab" aria-controls="pills-home" aria-selected="true">Hamburguesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#bocadillos" role="tab" aria-controls="pills-profile" aria-selected="false">Bocadillos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#acompañamientos" role="tab" aria-controls="pills-profile" aria-selected="false">Acompañamientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#ensalada" role="tab" aria-controls="pills-profile" aria-selected="false">Ensaladas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#postres" role="tab" aria-controls="pills-profile" aria-selected="false">Postres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#bebidas" role="tab" aria-controls="pills-profile" aria-selected="false">Bebidas</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div id="pills-tabContent" class="tab-content">
            <!-- CATEGORIA HAMBURGUESAS -->
            <div id="hamburguesas" class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <!-- HAMBURGUESAS DE TERNERA -->
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <a href="" alt="">
                            <img src="../img/hamburgers-with-beef.jpg" alt="" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h4 class="pt20 pb20"> Hamburguesas de Ternera </h4> <!--AÑADIR ROUTE--> -->
                                <p class="text-white"> Disfruta de una exquisita selección de Hamburguesas Gourmet de Ternera, preparadas con la más alta calidad de carne de ternera, jugosas y llenas de sabor.  ¡una verdadera delicia para tu paladar!</p>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- HAMBURGUESAS DE POLLO -->
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <a href="" alt="">
                            <img src="../img/" alt="" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h4 class="pt20 pb20"> Hamburguesas de Pollo </h4>
                                <p class="text-white"> Descubre nuestra deliciosa selección de Hamburguesas Gourmet de Pollo, elaboradas con jugosa carne de pollo premium y sazonadas con una mezcla especial que realzan su sabor. </p>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- HAMBURGUESAS DE VEGETALES -->
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <a href="" alt="">
                            <img src="../img/blog-3.jpg" alt="" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h4 class="pt20 pb20"> Hamburguesas Vegetales </h4>
                                <p class="text-white"> Explora nuestra variedad de Hamburguesas Gourmet Vegetales, elaboradas con una mezcla de verduras frescas, legumbres y especias seleccionadas para ofrecerte una opción deliciosa y nutritiva. </p>                      
                            </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- CATEGORIA BOCADILLOS -->
            <div class="tab-pane fade" id="bocadillos" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <!-- BOCADILLOS VEGETALES-->
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="../img/blog-4.jpg" alt="" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h4 class="pt20 pb20">Bocadillos Vegetales</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <!-- BOCADILLOS DE POLLO-->
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="../img/food-5981258_1280.jpg" alt="" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h4 class="pt20 pb20">Bocadillos de Pollo</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <!-- BOCADILLOS ESPECIALES-->
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="../img/blog-6.jpg" alt="" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h4 class="pt20 pb20">Bocadillos especiales</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CATEGORIA ACOMPAÑAMIENTOS -->
            <!-- CATEGORIA ENSALADAS -->
            <!-- CATEGORIA POSTRES -->
            <!-- CATEGORIA BEBIDAS-->

        </div>
    </div>
    <hr>
    <!-- RESEÑAS  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">RESEÑAS DE NUESTROS CLIENTES</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Nerea Santos</h3>
                    <h6 class="testmonial-subtitle">Pedido a domicilio</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nobis eligendi, quaerat accusamus ipsum sequi dignissimos consequuntur blanditiis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Angel Espino</h3>
                    <h6 class="testmonial-subtitle">Pedido a domicilio</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum minus obcaecati cum eligendi perferendis magni dolorum ipsum magnam, sunt reiciendis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Mariam Blanco</h3>
                    <h6 class="testmonial-subtitle">Pedido a domicilio</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, nam. Earum nobis eligendi, dignissimos consequuntur blanditiis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- CONTACTO  -->
    <div id="contacto" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                    <iframe style="width: 100%; height: 100%; min-height: 400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.614984478736!2d-3.9216577234464958!3d40.373060671446595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd419031a94d45e5%3A0x375a8b6ca7a1dc4c!2sUniversidad%20Europea%20de%20Madrid!5e0!3m2!1ses!2ses!4v1709939445078!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
            </div>

            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>Hamburgueseria UE</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, laboriosam doloremque odio delectus, sunt magnam laborum impedit molestiae, magni quae ipsum, ullam eos! Alias suscipit impedit et, adipisci illo quam.</p>
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