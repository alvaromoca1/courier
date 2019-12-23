<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaquetesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->text('Codigo_paquete');
            $table->integer('cliente_id')->unsigned();
            $table->string('fecha_resivido');
            $table->string('fecha_entrega');
            $table->text('Descripcion');
            $table->text('Novedades');
            $table->string('Total_neto');
            $table->string('total_IGV');
            $table->string('Nombre_destino');
            $table->string('Ciudad_destino');
            $table->string('direccion_destino');
            $table->string('celular_destino');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paquetes');
    }
}
