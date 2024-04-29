@extends('layouts.plantilla')

@section('title', 'Hamburgueseria UE')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- MENÚ IZQUIERDA DE CATEGORIAS -->
                <h3>Categorías</h3>
                <ul class="nav flex-column">
                    @foreach ($categorias as $categoria)
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('categorias.show', $categoria->nombre_categoria) }}">{{ $categoria->nombre_categoria }}</a>
                            <!-- Agregar desplegable de productos -->
                            <ul class="submenu">
                                @foreach ($categoria->productos as $producto)
                                    <li><a href="#">{{ $producto->nombre_producto }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
                <!-- CONTENIDO DE LA PÁGINA -->
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Estilos personalizados */
        .nav-item:hover .nav-link {
            color: red;
            /* Cambiar a rojo al pasar el mouse sobre la categoría */
        }

        .submenu {
            display: none;
            /* Ocultar el submenú por defecto */
        }

        .nav-item:hover .submenu {
            display: block;
            /* Mostrar submenú al pasar el mouse sobre la categoría */
        }
    </style>
@endpush
