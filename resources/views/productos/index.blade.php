@extends('layouts.plantilla')

@section('title', 'Producto')

@section('content')
    <h1>Bienvenido al indice de Productos</h1>
    <a href="{{ route('producto.create') }}">Crear Producto</a>
    <ul>
        @foreach ($producto as $producto)
            <li><a href="{{ route('producto.show', $producto->nombre_producto) }}">{{ $producto->nombre_producto }}</a>
            </li>
        @endforeach
    </ul>
    {{ $producto->links() }}
@endsection
