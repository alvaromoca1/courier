<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnviosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trasportista_id')->unsigned();
            $table->integer('paquete_id')->unsigned();
            $table->string('descripcion');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('trasportista_id')->references('id')->on('transportistas');
            $table->foreign('paquete_id')->references('id')->on('paquetes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('envios');
    }
}
