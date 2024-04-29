@extends('layouts.plantilla')

@section('title', 'Producto' . $producto)

@section('content')
    <h1>Bienvenido a el producto de {{ $producto->nombre_producto }}</h1>
    <a href="{{ route('producto.index') }}">Volver a los productos</a>
    <br>
    <a href="{{ route('producto.edit', $producto->nombre_producto) }}">Editar producto</a>
    <p>Esta es el producto: {{ $producto->id_producto }}</p>
    <p>{{ $producto->descripcion_producto }}</p>
@endsection
