@extends('layouts.plantilla')

@section('title', 'Hamburgesería UE - Menú ')

@section('content')
    <div class="container contenido-principal">
        <a href="{{ route('carta.index') }}">Volver al menú principal</a>
        <!-- INFORMACION DE LA CATEGORIA QUE SE VISUALIZA -->
        <h1>{{ $categoria->nombre_categoria }}</h1>
        <p>{{ $categoria->descripcion_categoria }}</p>

        <br>
        <!--<a href="{{ route('categorias.edit', $categoria->nombre_categoria) }}">Editar categoria</a>-->
        <!--<p>Esta es la categoría: {{ $categoria->id_categoria }}</p>-->

        <!-- MOSTAR PRODUCTOS DE ESA CATEGORIA -->
        <ul>
            @foreach ($categoria->productos as $producto)
                <li>
                    <a href="{{ route('producto.show', $producto->nombre_producto) }}">{{ $producto->nombre_producto }}</a>
                </li>
            @endforeach
        </ul>


    </div>
@endsection
