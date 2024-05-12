@extends('layouts.plantilla')
@section('title', 'Hamburgueseria UE - Carrito')

@section('content')
    <div>
        <h1>Carrito de Compras</h1>
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr>
                @foreach($carrito as $item)
                    <?php
                    $id_producto = (int)$item->id_producto;
                    ?>
                    <tr>
                        <td>{{ $item->id_producto }}</td>
                        <td>{{ $item->cantidad }}</td>
                    </tr>
                @endforeach
            <tr>
                <td>Precio final: {{$precioTotalCarrito}}€</td>
            </tr>

        </table>
    </div>
@endsection
