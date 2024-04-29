@extends('layouts.plantilla')

@section('title', 'Productos edit')

@section('content')
    <h1>Bienvenido a la edición de los productos</h1>
    <a href="{{ route('producto.index') }}">Volver a los productos</a>
    <form action="{{ route('producto.update', $producto->nombre_producto) }}" method="POST">
        @method('put')
        @csrf
        {{-- es el token, seguridad de laravel --}}
        <br>
        <label>nombre_producto:
            <input type="text" name="nombre_producto" value="{{ old('nombre_producto', $producto->nombre_producto) }}">
        </label>
        @error('nombre_producto')
            {{ $message }}
        @enderror
        <br>
        <label>descripcion_producto:
            <textarea name="descripcion_producto" rows=4>{{ $producto->descripcion_producto }}</textarea>
        </label>
        @error('descripcion_producto')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Editar producto</button>
    </form>
@endsection
