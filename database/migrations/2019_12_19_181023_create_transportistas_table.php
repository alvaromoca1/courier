<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransportistasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DNI');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Celular');
            $table->string('direccion');
            $table->string('Correo');
            $table->text('Nota_adicional');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transportistas');
    }
}
