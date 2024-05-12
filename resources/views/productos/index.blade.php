@extends('layouts.plantilla-admin')

@section('title', 'Hamburgesería UE - Productos')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div class="col-md-20">
                <h3>Productos</h3>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-white">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->nombre_producto }}</td>
                                    <td>{{ $producto->descripcion_producto }}</td>
                                    <td>{{ $producto->precio_producto }}€</td>
                                    <td>
                                        <a href="{{ route('productos.edit', $producto->nombre_producto) }}"
                                            class="button nav-link">Editar</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('productos.create', $producto->nombre_producto) }}"
                                            class="button nav-link">Crear</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('productos.destroy', $producto->nombre_producto) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="button nav-link">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
