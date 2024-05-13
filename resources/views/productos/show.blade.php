@extends('layouts.plantilla-admin')

@section('title', 'Hamburgesería UE - Productos')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div>
                <h3>Producto</h3>
                <br>
                <ul class="nav flex-colum">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.edit', $producto->nombre_producto) }}">
                            {{ $producto->nombre_producto }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <span>{{ $producto->descripcion_producto }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
