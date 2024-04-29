@extends('layouts.plantilla')

@section('title', 'Productos create')

@section('content')
    <h1>Bienvenido a la creacion de Productos</h1>
    <a href="{{ route('producto.index') }}">Volver a los Productos</a>
    <form action="{{ route('producto.storage') }}" method="POST">

        @csrf
        {{-- es el token, seguridad de laravel --}}
        <br>
        <label>nombre_producto:
            <input type="text" name="nombre_producto" value="{{ old('nombre_producto') }}">
        </label>

        @error('nombre_producto')
            {{ $message }}
        @enderror

        <br>
        <label>descripcion_producto:
            <textarea name="descripcion_producto" rows=4>{{ old('descripcion_producto') }}</textarea>
        </label>

        @error('descripcion_producto')
            {{ $message }}
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
