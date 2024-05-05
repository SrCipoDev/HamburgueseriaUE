@extends('layouts.plantilla')

@section('title', 'Hamburgesería UE - Menú')

@section('content')
    <div class="container contenido-principal">
        <h1>Bienvenido a el producto de {{ $producto->nombre_producto }}</h1>
        <br>
        <p>{{ $producto->descripcion_producto }}</p>


        <h5 class="text-center">Realiza tu pedido ahora!</h5>
        <ul class="text-center navbar-nav">
            @foreach ($productos as $producto)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('producto.show', $producto->nombre_producto) }}">
                        {{ $producto->nombre_producto }}
                    </a>
                    <p>Categoría: {{ $producto->categoria->nombre_categoria }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
