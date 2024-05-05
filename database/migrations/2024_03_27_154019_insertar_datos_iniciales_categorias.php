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
            ['id_categoria' => 1, 'nombre_categoria' => 'Ensaladas', 'descripcion_categoria' => 'Ensaladas frescas y saludables, preparadas con los ingredientes más frescos y deliciosos.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 2, 'nombre_categoria' => 'Tapas', 'descripcion_categoria' => 'Variedad de tapas deliciosas para compartir o disfrutar individualmente.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 3, 'nombre_categoria' => 'Hamburguesas Carne', 'descripcion_categoria' => 'Deliciosas hamburguesas elaboradas con carne de la más alta calidad y acompañadas de ingredientes frescos y sabrosos.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 4, 'nombre_categoria' => 'Hamburguesas Especiales', 'descripcion_categoria' => 'Deliciosas hamburguesas especiales elaboradas con carne de la más alta calidad y acompañadas de ingredientes frescos y sabrosos.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 5, 'nombre_categoria' => 'Hamburguesas Pollo', 'descripcion_categoria' => 'Jugosos bocadillos con tierna carne de pollo, marinada y sazonada a la perfección. Una opción deliciosa y saludable para cualquier ocasión.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 6, 'nombre_categoria' => 'Perritos', 'descripcion_categoria' => 'Sabrosos perritos con pan recién horneadas con una variedad de coberturas y sabores para todos los gustos.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 7, 'nombre_categoria' => 'Bocatas de Bacon', 'descripcion_categoria' => 'Sabrosos bocadillos rellenos de crujiente bacon que te harán agua la boca. Disfruta de una explosión de sabor con cada bocado.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 8, 'nombre_categoria' => 'Bocatas de Pollo', 'descripcion_categoria' => 'Jugosos bocadillos con tierna carne de pollo, marinada y sazonada a la perfección. Una opción deliciosa y saludable para cualquier ocasión.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 9, 'nombre_categoria' => 'Bocatas de Raxo', 'descripcion_categoria' => 'Deléitate con nuestros bocadillos de raxo, un manjar típico de Galicia, elaborado con carne de cerdo adobada en una mezcla de especias tradicionales.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 10, 'nombre_categoria' => 'Bocatas Varios', 'descripcion_categoria' => 'Una selección variada de bocadillos para todos los gustos. Desde clásicos hasta creaciones únicas, hay algo para cada paladar en esta categoría.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 11, 'nombre_categoria' => 'Sandwiches', 'descripcion_categoria' => 'Exquisitos sándwiches elaborados con ingredientes frescos y pan recién horneado. Perfectos para una comida rápida y deliciosa.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 12, 'nombre_categoria' => 'Platos Combinados', 'descripcion_categoria' => 'Combinaciones irresistibles que te ofrecen lo mejor de nuestra cocina en un solo plato. Disfruta de una variedad de sabores en cada orden.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 13, 'nombre_categoria' => 'Postres', 'descripcion_categoria' => 'Dulces y deliciosos postres ideales para satisfacer tu antojo de algo dulce después de una buena comida.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
            ['id_categoria' => 14, 'nombre_categoria' => 'Bebidas', 'descripcion_categoria' => 'Variedad de bebidas refrescantes y calientes ideales para acompañar tus comidas.', 'created_at' => '2024-03-27 16:32:50', 'updated_at' => '2024-03-27 16:32:50'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categorias')->whereIn('id_categoria', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14])->delete();
    }
}
