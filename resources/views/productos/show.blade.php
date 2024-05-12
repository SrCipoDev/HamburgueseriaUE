@extends('layouts.plantilla-admin')

@section('title', 'Hamburgesería UE - Productos')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div>
                <h3>Productos</h3>
                <br>
                <ul class="nav flex-colum">
                    @foreach ($productos as $producto)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('productos.edit', $producto->nombre_producto) }}">
                                {{ $producto->nombre_producto }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
