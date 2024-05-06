@extends('layouts.plantilla')

@section('title', 'Hamburgueseria UE - Menú')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <h1>Productos</h1>
{{--             <!--<a href="{{ route('productos.create') }}">Crear Producto</a>--> --}}
            <ul>
                @foreach ($productos as $producto)
                <li><a
                        href="{{ route('productos.show', $producto->nombre_producto) }}">{{ $producto->nombre_producto }}</a>
                </li>
            @endforeach
            </ul>
            {{ $productos->links() }}
        @endsection
