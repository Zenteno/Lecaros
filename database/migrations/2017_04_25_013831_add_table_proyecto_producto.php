<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableProyectoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proy_id')->unsigned();
            $table->integer('prod_id')->unsigned();
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('costo');
            $table->integer('impuesto');
            $table->timestamps();

            $table->foreign('proy_id')->references('id')->on('proyectos');
            $table->foreign('prod_id')->references('id')->on('productos');
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
