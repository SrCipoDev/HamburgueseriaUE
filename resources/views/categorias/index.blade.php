@extends('layouts.plantilla')

@section('title','Categorias')

@section('content')
    <h1>Bienvenido al indice de categorias</h1>
    <a href="{{route('categorias.create')}}">Crear categoria</a>
    <ul>
        @foreach ($categorias as $categoria)
            <li><a href="{{route('categorias.show', $categoria->nombre_categoria)}}">{{$categoria->nombre_categoria}}</a></li>
        @endforeach
    </ul>
    {{$categorias->links()}}
@endsection
