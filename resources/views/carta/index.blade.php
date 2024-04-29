<!-- Menú de Categorías -->
<div class="col-md-3">
    <h3>MOD</h3>

    <h3>Hamburgueseria UE</h3>
    <ul>
        @foreach ($categorias as $categoria)
            <li>{{ $categoria->nombre }}</li>
        @endforeach
    </ul>

</div>

<!-- Productos de la Categoría Seleccionada -->
<div class="col-md-9">
    <!-- Aquí puedes mostrar los productos de la categoría seleccionada -->
</div>
