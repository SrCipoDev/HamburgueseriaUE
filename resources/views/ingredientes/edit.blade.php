@extends('layouts.plantilla')

@section('title','ingredientes edit')

@section('content')
    <h1>Bienvenido a la edición de la ingrediente</h1>
    <a href="{{route('ingredientes.index')}}">Volver a los ingredientes</a>
    <form action="{{route('ingredientes.update', $ingrediente->nombre_ingrediente)}}" method="POST">
        @method('put')
        @csrf
        {{-- es el token, seguridad de laravel --}}
        <br>
        <label>nombre_ingrediente:
            <input type="text" name="nombre_ingrediente" value="{{$ingrediente->nombre_ingrediente}}">
        </label>
        <br>
        <label>descripcion_ingrediente:
            <textarea name="descripcion_ingrediente" rows = 4>{{$ingrediente->descripcion_ingrediente}}</textarea>
        </label>
        <br>
        <button type="submit">Editar ingrediente</button>
    </form>
@endsection
