<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertarDatosInicialesCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categorias')->insert([
            ['id_categoria' => 1, 'nombre_categoria' => 'Bebidas', 'descripcion_categoria' => 'Variedad de bebidas refrescantes y calientes ideales para acompañar tus comidas.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 2, 'nombre_categoria' => 'Ensaladas', 'descripcion_categoria' => 'Ensaladas frescas y saludables, preparadas con los ingredientes más frescos y deliciosos.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 3, 'nombre_categoria' => 'Hamburguesas', 'descripcion_categoria' => 'Deliciosas hamburguesas elaboradas con carne de la más alta calidad y acompañadas de ingredientes frescos y sabrosos.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 4, 'nombre_categoria' => 'Postres', 'descripcion_categoria' => 'Dulces y deliciosos postres ideales para satisfacer tu antojo de algo dulce después de una buena comida.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 5, 'nombre_categoria' => 'Pizzas', 'descripcion_categoria' => 'Sabrosas pizzas recién horneadas con una variedad de coberturas y sabores para todos los gustos.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categorias')->whereIn('id_categoria', [1, 2, 3, 4, 5])->delete();
    }
}
