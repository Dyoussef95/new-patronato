<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSituacionesSaludEnfermedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situaciones_salud_enfermedades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('situacion_salud_id')->unsigned();
            $table->foreign('situacion_salud_id')->references('id')->on('situaciones_salud')->onDelete('cascade');
            $table->integer('enfermedad_id')->unsigned();
            $table->foreign('enfermedad_id')->references('id')->on('enfermedades')->onDelete('cascade');
            $table->boolean('tratamiento');
            $table->integer('lugar_tratamiento_id')->unsigned()->nullable();
            $table->foreign('lugar_tratamiento_id')->references('id')->on('centros_salud')->onDelete('cascade');
            $table->boolean('habilitado');
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
        Schema::dropIfExists('situaciones_salud_enfermedades');
    }
}
