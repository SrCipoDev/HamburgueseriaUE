@extends('layouts.plantilla')
@section('title', 'Hamburgueseria UE - Menú')

@section('content')
    <div class="container">
        <div class="row">
            <div class="">

                <!-- TITULO NUESTRA CARTA  -->
                <div id="menu" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
                    <h2 class="section-title py-5">NUESTRA CARTA</h2>
                    <h5 class="text-center">Realiza tu pedido ahora!</h5>

                    <!-- NUESTRA CARTA HAMBURGUESERIA UE -->
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
                                        <form action="{{ url('/anadircarrito', $producto->id_producto) }}" method="post"
                                            class="">
                                            @csrf
                                            <div class="my-3 my-md-0"> <!--col-md-4 -->
                                                <div class="card bg-transparent border mb-4">
                                                    <img src="{{ $producto->ruta_imagen }}"
                                                        alt="{{ $producto->nombre_producto }}"
                                                        class="rounded-0 card-img-top mg-responsive img-carta">
                                                    <div class="card-body">
                                                        <h4 class="pt20 pb20 text-white">{{ $producto->nombre_producto }}
                                                        </h4>
                                                        <p class="text-white">{{ $producto->descripcion_producto }}</p>
                                                        <p class="text-white">{{ $producto->precio_producto }}€</p>
                                                        <div class="d-flex justify-content-center">
                                                            @if (auth()->check())
                                                                <input type="number" name="cantidad" min="1"
                                                                    style="width: 40px;" value="1">
                                                                <button type="submit" class="nav-link button"
                                                                    value="anadircarrito"> + Añadir al carrito</button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- FIN MOSTRAR PRODUCTOS DE CADA CATEGORIA-->
                </div> <!-- FIN NUESTRA CARTA HAMBURGUESERIA UE -->
            </div>
        </div>
    </div>
@endsection
