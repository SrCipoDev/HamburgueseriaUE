<!-- Menú de Categorías -->
<ul>
    @foreach ($categorias as $categoria)
        <li>
            <a href="{{ route('categorias.show', $categoria->nombre_categoria) }}">{{ $categoria->nombre_categoria }}</a>
            @if ($categoria->productos->count() > 0)
                <ul>
                    @foreach ($categoria->productos as $producto)
                        <li>{{ $producto->nombre_producto }}</li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
