@extends('layouts.plantilla')

@section('title','Ingredientes')

@section('content')
    <h1>Bienvenido al indice de Ingredientes</h1>
    <a href="{{route('ingredientes.create')}}">Crear ingrediente</a>
    <ul>
        @foreach ($ingredientes as $ingrediente)
            <li><a href="{{route('ingredientes.show', $ingrediente->nombre_ingrediente)}}">{{$ingrediente->nombre_ingrediente}}</a></li>
        @endforeach
    </ul>
    {{$ingredientes->links()}}
@endsection
