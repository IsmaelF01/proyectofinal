<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->where('role_id','!=',4);
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('restaurante_id')->unsigned();
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');

            // $table->bigInteger('plato_id')->unsigned();
            // $table->foreign('plato_id')->references('id')->on('platos');

            $table->bigInteger('repartidor_id')->nullable()->unsigned()->where('role_id','=',3);
            $table->foreign('repartidor_id')->references('id')->on('users');

            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
