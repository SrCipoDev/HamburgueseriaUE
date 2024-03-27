<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_pedidos', function (Blueprint $table) {
            $table->smallInteger('id_producto')->unsigned();
            $table->bigInteger('id_pedido')->unsigned();
            $table->primary(['id_producto', 'id_pedido']);
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_pedidos');
    }
}
