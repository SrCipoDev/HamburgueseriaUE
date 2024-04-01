@extends('layouts.plantilla')

@section('title','Categorias ' . $categoria)

@section('content')
    <h1>Bienvenido a la categoria de {{$categoria->nombre_categoria}}</h1>
    <a href="{{route('categorias.index')}}">Volver a las categorías</a>
    <br>
    <a href="{{route('categorias.edit', $categoria->nombre_categoria)}}">Editar categoria</a>
    <p>Esta es la categoría: {{$categoria->id_categoria}}</p>
    <p>{{$categoria->descripcion_categoria}}</p>
@endsection
