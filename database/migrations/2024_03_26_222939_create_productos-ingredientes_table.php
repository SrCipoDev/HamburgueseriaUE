<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_ingredientes', function (Blueprint $table) {
            $table->smallInteger('id_producto')->unsigned();
            $table->smallInteger('id_ingrediente')->unsigned();
            $table->primary(['id_producto', 'id_ingrediente']);
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_ingrediente')->references('id_ingrediente')->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_ingredientes');
    }
}
