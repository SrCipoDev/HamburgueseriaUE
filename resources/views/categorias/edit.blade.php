@extends('layouts.plantilla')

@section('title','Categorias edit')

@section('content')
    <h1>Bienvenido a la edición de la categoria</h1>
    <a href="{{route('categorias.index')}}">Volver a las categorías</a>
    <form action="{{route('categorias.update', $categoria->nombre_categoria)}}" method="POST">
        @method('put')
        @csrf
        {{-- es el token, seguridad de laravel --}}
        <br>
        <label>nombre_categoria:
            <input type="text" name="nombre_categoria" value="{{old ('nombre_categoria',$categoria->nombre_categoria)}}">
        </label>
        @error('nombre_categoria')
            {{$message}}
        @enderror
        <br>
        <label>descripcion_categoria:
            <textarea name="descripcion_categoria" rows = 4>{{$categoria->descripcion_categoria}}</textarea>
        </label>
        @error('descripcion_categoria')
            {{$message}}
        @enderror
        <br>
        <button type="submit">Editar categoria</button>
    </form>
@endsection
