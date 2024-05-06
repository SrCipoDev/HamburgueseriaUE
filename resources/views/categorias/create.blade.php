@extends('layouts.plantilla-admin')

@section('title', 'Hamburguesería UE - Crear Categorías')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div>
                <h1>Creacion de las categorías</h1>
                <br>
                <section class="card">
                    <div class="card-header">Creación de una nueva categoría</div>
                    <div class="card-body">
                        <form action="{{ route('categorias.storage') }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-md-end text-start">Nombre de la Categoría:</label>
                                <div class="col-md-6 mb-3">
                                    <input class="formulario" type="text" name="nombre_categoria"
                                        value="{{ old('nombre_categoria') }}">
                                    @error('nombre_categoria')
                                        {{ $message }}
                                    @enderror
                                    <br>
                                </div>
                                <label class="col-md-4 col-form-label text-md-end text-start">Descripción de la Categoría:</label>
                                <div class="col-md-6 mb-3">
                                    <textarea name="descripcion_categoria" rows=4 class="formulario">{{ old('descripcion_categoria') }}</textarea>
                                    @error('descripcion_categoria')
                                        {{ $message }}
                                    @enderror
                                    <br>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <button type="submit button nav-link col-md-3 nav-link button">Crear Categoría</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
