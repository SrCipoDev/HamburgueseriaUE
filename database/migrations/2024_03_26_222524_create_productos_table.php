<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->smallIncrements('id_producto')->unsigned();
            $table->string('nombre_producto', 30)->nullable(false);
            $table->text('descripcion_producto')->nullable(false);
            $table->decimal('precio_producto', 5, 2)->unsigned()->nullable(false);
            $table->smallInteger('id_categoria')->unsigned()->nullable(false);
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
