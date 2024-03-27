<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->mediumIncrements('id_cliente')->unsigned();
            $table->string('nombre_cliente', 30)->nullable(false);
            $table->string('apellidos_cliente', 40)->nullable(false);
            $table->char('telefono_cliente', 12)->nullable(false);
            $table->string('direccion_cliente', 50)->nullable(false);
            $table->string('correo_electronico', 40)->unique()->nullable(false);
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
        Schema::dropIfExists('clientes');
    }
}
