@extends('layouts.plantilla')

@section('title','ingredientes ' . $ingrediente)

@section('content')
    <h1>Bienvenido al ingrediente {{$ingrediente->nombre_ingrediente}}</h1>
    <a href="{{route('ingredientes.index')}}">Volver al resto de ingredientes</a>
    <br>
    <a href="{{route('ingredientes.edit', $ingrediente->nombre_ingrediente)}}">Editar ingrediente</a>
    <p>Esta es es ingrediente Nº: {{$ingrediente->id_ingrediente}}</p>
    <p>{{$ingrediente->descripcion_ingrediente}}</p>
@endsection
