<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarColumnaTipoTratamientoConsumosALaTablaSituacionesSaludConsumos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('situaciones_salud_consumos', function (Blueprint $table) {
            $table->integer('tipo_tratamiento_consumos_id')->unsigned()->nullable();
            $table->foreign('tipo_tratamiento_consumos_id')->references('id')->on('tipos_tratamientos_consumos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('situaciones_salud_consumos', function (Blueprint $table) {
            $table->dropColumn(['tipo_tratamiento_consumos_id']);
        });
    }
}
