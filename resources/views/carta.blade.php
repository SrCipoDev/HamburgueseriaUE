@extends('layouts.plantilla')

@section('title', 'carta')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!--MENÚ IZQUIERDA DE CATEGORIAS -->
                <h3>Categorías</h3>
                <ul>
                    @foreach ($categorias as $categoria)
                        <li>{{ $categoria->nombre_categoria }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
                <!-- Productos por categoría -->
                @foreach ($categorias as $categoria)
                    <h3>{{ $categoria->nombre_categoria }}</h3>
                    <div class="row">
                        @foreach ($categoria->productos as $producto)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $producto->nombre_producto }}</h5>
                                        <p class="card-text">{{ $producto->descripcion_producto }}</p>
                                        <p class="card-text">{{ $producto->precio_producto }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
