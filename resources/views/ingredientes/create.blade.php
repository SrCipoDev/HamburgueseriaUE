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
            <input type="text" name="nombre_ingrediente" value="{{old('nombre_ingrediente')}}">
        </label>

        @error('nombre_ingrediente')
            {{$message}}
        @enderror

        <br>
        <label>descripcion_ingrediente:
            <textarea name="descripcion_ingrediente" rows = 4>{{old('descripcion_ingrediente')}}</textarea>
        </label>

        @error('descripcion_ingrediente')
            {{$message}}
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
