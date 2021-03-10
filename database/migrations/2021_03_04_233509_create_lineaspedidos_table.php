<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaspedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_pedidos', function (Blueprint $table) {
            $table->bigInteger('plato_id')->unsigned();
            $table->foreign('plato_id')->references('id')->on('platos');
            $table->bigInteger('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->integer('cantidad');
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
        Schema::dropIfExists('lineas_pedidos');
    }
}
