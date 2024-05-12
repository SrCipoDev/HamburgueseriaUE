@extends('layouts.plantilla-admin')

@section('title', 'Hamburguesería UE - Editar Categorías')

@section('content')
    <div class="container contenido-principal">
        <div class="row">
            <div>
                <h1>Edición de la categoria {{ $categoria->nombre_categoria }}</h1>
                <br>
                <section class="card">
                    <div class="card-header">Editor de Categorias</div>
                    <div class="card-body">
                        <form action="{{ route('categorias.update', $categoria->nombre_categoria) }}" method="POST">
                            @method('put')
                            @csrf
                            {{-- es el token, seguridad de laravel --}}
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-md-end text-start"><span class="text">Nombre de
                                        la Categoría:</label>
                                <div class="col-md-6 mb-3">
                                    <input class="formulario" type="text" name="nombre_categoria"
                                        value="{{ old('nombre_categoria', $categoria->nombre_categoria) }}">
                                    @error('nombre_categoria')
                                        {{ $message }}
                                    @enderror
                                    <br>
                                </div>
                                <label class="col-md-4 col-form-label text-md-end text-start text">Descripción de la
                                    Categoría:</label>
                                <div class="col-md-6 mb-3">
                                    <textarea claname="descripcion_categoria" rows=4 class="formulario">{{ $categoria->descripcion_categoria }}</textarea>
                                    @error('descripcion_categoria')
                                        {{ $message }}
                                    @enderror
                                    <br>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <button type="submit" class=" button nav-link col-md-3 nav-link button">Editar
                                        categoria</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <br>
                <div>
                    <a class="nav-link" href="{{ route('categorias.index') }}">Volver a las categorías</a>
                </div>
            </div>
        </div>
    </div>
@endsection
