@extends('layouts.plantilla-admin')

@section('title', 'Hamburguesería UE - Crear Producto')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div>
                <h1>Creacion de Productos</h1>
                <br>
                <section class="card">
                    <div class="card-header">Creación de un nuevo producto</div>
                    <div class="card-body">
                        s @csrf
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start">Nombre del Producto:</label>
                            <div class="col-md-6 mb-3">
                                <input class="formulario" type="text" name="nombre_producto"
                                    value="{{ old('nombre_producto') }}">
                                @error('nombre_producto')
                                    {{ $message }}
                                @enderror
                                <br>
                            </div>
                            <label class="col-md-4 col-form-label text-md-end text-start">Descripción de los
                                Productos:</label>
                            <div class="col-md-6 mb-3">
                                <textarea name="descripcion_producto" rows=4 class="formulario">{{ old('descripcion_producto') }}</textarea>
                                @error('descripcion_producto')
                                    {{ $message }}
                                @enderror
                                <br>
                            </div>
                            <br>
                            <div class="mb-3">
                                <button type="submit button nav-link col-md-3 nav-link button">Crear Producto</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>





    <form action="{{ route('producto.storage') }}" method="POST">

        @csrf
        {{-- es el token, seguridad de laravel --}}
        <br>
        <label>nombre_producto:
            <input type="text" name="nombre_producto" value="{{ old('nombre_producto') }}">
        </label>

        @error('nombre_producto')
            {{ $message }}
        @enderror

        <br>
        <label>descripcion_producto:
            <textarea name="descripcion_producto" rows=4>{{ old('descripcion_producto') }}</textarea>
        </label>

        @error('descripcion_producto')
            {{ $message }}
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
