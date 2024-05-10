@extends('layouts.plantilla')

@section('title', 'Hamburgueseria UE - Menú')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <h1>Productos</h1>
            <ul>
                @foreach ($productos as $producto){{-- NEREA MIRA EL IF --}}
                @if (auth()->check())
                    <form action="{{ route('pedidos.index', $producto->nombre_producto) }}" method="post">
                        @csrf
                        
                        <li><a href="{{ route('productos.show', $producto->nombre_producto) }}">{{ $producto->nombre_producto }}</a>
                            <input type="number" name="cantidad" min="1" style="width:40px;" placeholder="1">
                            <input type="submit" value="Añadir al pedido">
                        </li>
                    </form>
                
                @endif
                @if (!auth()->check())
                    <form action="{{ route('login') }}" method="get">
                        @csrf
                        <li><a href="{{ route('productos.show', $producto->nombre_producto) }}">{{ $producto->nombre_producto }}</a>
                            <input type="number" name="cantidad" min="1" value="1" style="width:40px;" placeholder="0">
                            <input type="submit" value="Añadir al pedido">
                        </li>
                    </form>
                
                @endif
                @endforeach
            </ul>
            {{ $productos->links() }}
        </div>
    </div>
@endsection

