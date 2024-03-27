<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateclientespedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientespedidos', function (Blueprint $table) {
            $table->dateTime('fechahora_compra');
            $table->mediumInteger('id_cliente')->unsigned();
            $table->bigInteger('id_pedido')->unique()->unsigned(); // Restricción única en id_pedido
            $table->primary(['fechahora_compra', 'id_cliente', 'id_pedido']);
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
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
        Schema::dropIfExists('clientespedidos');
    }
}
