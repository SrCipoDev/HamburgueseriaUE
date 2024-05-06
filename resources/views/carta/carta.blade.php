@extends('layouts.plantilla')
@section('title', 'Hamburgueseria UE - Menú')

@section('content')
    <div class="container">
        <div class="row">
            <div class="contenido-principal">
                <!--MENÚ CATEGORIAS -->
                <h5 class="text-center">Realiza tu pedido ahora!</h5>
                <ul class="text-center navbar-nav">
                    @foreach ($categorias as $categoria)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categorias.show', $categoria->nombre_categoria) }}">
                                {{ $categoria->nombre_categoria }}
                            </a>
                            <!-- NEREA //  HAY QUE PONER MÁS PEQUEÑOS LOS PRODUCTOS Y/O HACER LO DEL DESPLEGABLE -->
                            <ul class="text-center navbar-nav">
                                @foreach ($categoria->productos as $producto)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('productos.show', $producto->nombre_producto) }}">
                                            {{ $producto->nombre_producto }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
