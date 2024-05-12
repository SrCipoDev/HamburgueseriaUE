@extends('layouts.plantilla-admin')

@section('title', 'Hamburgueseria UE - Cateogrías')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div class="col-md-20">
                <h3>Categorías</h3>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-white">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->nombre_categoria }}</td>
                                    <td>{{ $categoria->descripcion_categoria }}</td>
                                    <td>
                                        <a href="{{ route('categorias.edit', $categoria->nombre_categoria) }}"
                                            class="button nav-link">Editar</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('categorias.create', $categoria->nombre_categoria) }}"
                                            class="button nav-link">Crear</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('categorias.destroy', $categoria->nombre_categoria) }}"
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
