@extends('layouts.plantilla')

@section('title', 'Hamburgueseria UE')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!--MENÚ IZQUIERDA DE CATEGORIAS -->
                <h3>Categorías</h3>
                <ul>
                    @foreach ($categorias as $categoria)
                        <li><a
                                href="{{ route('categorias.show', $categoria->nombre_categoria) }}">{{ $categoria->nombre_categoria }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col-md-9">
            </div>
        </div>
    </div>
@endsection
