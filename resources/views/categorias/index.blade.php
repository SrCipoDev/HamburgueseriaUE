@extends('layouts.plantilla-admin')

@section('title', 'Hamburgueseria UE')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div>
                <!-- MENÚ IZQUIERDA DE CATEGORIAS -->
                <h3>Categorías</h3>
                <ul class="nav flex-column">
                    @foreach ($categorias as $categoria)
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('categorias.edit', $categoria->nombre_categoria) }}">{{ $categoria->nombre_categoria }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
                <!-- CONTENIDO DE LA PÁGINA -->
            </div>
        </div>
    </div>
@endsection
