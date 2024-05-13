@extends('layouts.plantilla-admin')

@section('title', 'Hamburguesería UE - Editar Productos')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div>
                <h1>Edición del Producto: {{ $producto->nombre_producto }}</h1>
                <br>
                <section class="card">
                    <div class="card-header">Editor de Producto</div>
                    <div class="card-body">
                        <form action="{{ route('productos.update', $producto->nombre_producto) }}" method="POST">
                            @method('put')
                            @csrf
                            {{-- es el token, seguridad de laravel --}}
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-md-end text-start">Nombre del Producto:</label>
                                <div class="col-md-6 mb-3">
                                    <input class="formulario" type="text" name="nombre_producto"
                                        value="{{ $producto->nombre_producto }}">
                                    @error('nombre_producto')
                                        {{ $message }}
                                    @enderror
                                    <br>
                                </div>
                                <label class="col-md-4 col-form-label text-md-end text-start text">Descripción del
                                    Producto:</label>
                                <div class="col-md-6 mb-3">
                                    <textarea name="descripcion_producto" rows=4 class="formulario">{{ $producto->descripcion_producto }}</textarea>
                                    @error('descripcion_producto')
                                        {{ $message }}
                                    @enderror
                                    <br>
                                </div>
                                <label class="col-md-4 col-form-label text-md-end text-start">Precio:</label>
                                <div class="col-md-6 mb-3">
                                    <input class="formulario" type="text" name="precio_producto"
                                        value="{{ $producto->precio_producto }}€">
                                    @error('precio_producto')
                                        {{ $message }}
                                    @enderror
                                    <br>
                                </div>
                                <label class="col-md-4 col-form-label text-md-end text-start">Categoría:</label>
                                <div class="col-md-6 mb-3">
                                    <select name="id_categoria" class="formulario">
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id_categoria }}"
                                                {{ $categoria->id_categoria == $producto->id_categoria ? 'selected' : '' }}>
                                                {{ $categoria->nombre_categoria }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_categoria')
                                        {{ $message }}
                                    @enderror
                                    <br>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <button type="submit" class=" button nav-link col-md-3 nav-link button">Editar
                                        producto</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <br>
                <div>
                    <a class="nav-link" href="{{ route('productos.index') }}">Volver a los productos</a>
                </div>
            </div>
        </div>
    </div>
@endsection
