<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSituacionesSaludConsumos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situaciones_salud_consumos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('situacion_salud_id')->unsigned();
            $table->foreign('situacion_salud_id')->references('id')->on('situaciones_salud')->onDelete('cascade');
            $table->integer('consumo_id')->unsigned();
            $table->foreign('consumo_id')->references('id')->on('consumos')->onDelete('cascade');
            $table->integer('tipo_consumo_id')->unsigned();
            $table->foreign('tipo_consumo_id')->references('id')->on('tipos_consumo')->onDelete('cascade');
            $table->boolean('tratamiento');
            $table->integer('lugar_tratamiento_consumo_id')->unsigned()->nullable();
            $table->foreign('lugar_tratamiento_consumo_id')->references('id')->on('lugares_tratamiento_consumo')->onDelete('cascade');
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
        Schema::dropIfExists('situaciones_salud_consumos');
    }
}
