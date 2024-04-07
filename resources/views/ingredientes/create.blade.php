@extends('layouts.plantilla')

@section('title','ingredientes create')

@section('content')
    <h1>Bienvenido a la creacion de ingredientes</h1>
    <a href="{{route('ingredientes.index')}}">Volver a las ingredientes</a>
    <form action="{{route('ingredientes.storage')}}" method="POST">

        @csrf
        {{-- es el token, seguridad de laravel --}}
        <br>
        <label>nombre_ingrediente:
            <input type="text" name="nombre_ingrediente">
        </label>
        <br>
        <label>descripcion_ingrediente:
            <textarea name="descripcion_ingrediente" rows = 4></textarea>
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
