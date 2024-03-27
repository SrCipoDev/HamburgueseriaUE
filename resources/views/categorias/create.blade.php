@extends('layouts.plantilla')

@section('title','Categorias create')

@section('content')
    <h1>Bienvenido a la creacion de categorias</h1>
    <a href="{{route('categorias.index')}}">Volver a las categorías</a>
    <form action="{{route('categorias.storage')}}" method="POST">

        @csrf
        {{-- es el token, seguridad de laravel --}}
        <br>
        <label>nombre_categoria:
            <input type="text" name="nombre_categoria">
        </label> 
        <br>
        <label>descripcion_categoria:
            <textarea name="descripcion_categoria" rows = 4></textarea>
        </label> 
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
