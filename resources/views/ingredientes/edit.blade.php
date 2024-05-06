@extends('layouts.plantilla')

@section('title','ingredientes edit')

@section('content')
    <h1>Bienvenido a la edición del ingrediente</h1>
    <a href="{{route('ingredientes.index')}}">Volver a los ingredientes</a>
    <form action="{{route('ingredientes.update', $ingrediente->nombre_ingrediente)}}" method="POST">
        @method('put')
        @csrf
        {{-- es el token, seguridad de laravel --}}
        <br>
        <label>nombre_ingrediente:
            <input type="text" name="nombre_ingrediente" value="{{old ('nombre_ingrediente', $ingrediente->nombre_ingrediente)}}">
            {{-- old guarda lo que había escrito al fallar la validación --}}
        </label>
        @error('nombre_ingrediente')
            {{$message}}
        @enderror
        <br>
        <label>descripcion_ingrediente:
            <textarea name="descripcion_ingrediente" rows = 4>{{$ingrediente->descripcion_ingrediente}}</textarea>
        </label>
        @error('descripcion_ingrediente')
            {{$message}}
        @enderror
        <br>
        <button type="submit">Editar ingrediente</button>
    </form>
    <form action="{{ route('ingredientes.destroy', $ingrediente->nombre_ingrediente) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
