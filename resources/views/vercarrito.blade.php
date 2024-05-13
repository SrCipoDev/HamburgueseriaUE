@extends('layouts.plantilla')
@section('title', 'Hamburgueseria UE - Carrito')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div class="col-md-20">
                <h1>Carrito de Compras</h1>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-white">
                            <tr>
                                <th>Producto</th>
                                <th></th>
                                <th></th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @foreach ($carrito as $item)
                                <?php
                                $id_producto = (int) $item->id_producto;
                                ?>
                                <tr>
                                    <td>{{ $item->id_producto }}</td>
                                    <td>{{ $item->nombre_producto }}</td>
                                    <td>{{ $item->descripcion_producto }}</td>
                                    <td>{{ $item->cantidad }}</td>
                                    <td>{{ $item->precio_producto }}€</td>
                                    <td>
                                        <form action="{{ route('eliminarDelCarrito', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="button nav-link">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tbody class="text-white">
                            <tr>
                                <td><strong>TOTAL: </strong></td>
                                <td><strong></strong></td>
                                <td></td>
                                <td></td>
                                <td><strong> {{ $precioTotalCarrito }}€</strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <a class="button nav-link boton-compra" href="{{ route('pedidos.index') }}">Finalizar Compra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
