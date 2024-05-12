@extends('layouts.plantilla')

@section('title', 'Hamburgueseria UE - Menú')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div>
                <h3>Productos</h3>
                <ul class="nav flex-column">
                    @foreach ($productos as $producto)
                        {{-- NEREA MIRA EL IF --}}

                            <form action="{{ route('pedidos.index', $producto->nombre_producto) }}" method="post">
                                @csrf
                                <li><a
                                        href="{{ route('productos.show', $producto->nombre_producto) }}">{{ $producto->nombre_producto }}</a>
                                    
                                    <input type="submit" value="Añadir al pedido">
                                </li>
                            </form>
                    @endforeach
                </ul>
                {{ $productos->links() }}
            </div>
        </div>
    </div>
@endsection
