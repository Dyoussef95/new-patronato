<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarColumnaMotivoIngresoProgramaIdTablaHistorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historias', function (Blueprint $table) {
            $table->integer('motivo_ingreso_programa_id')->unsigned()->nullable();
            $table->foreign('motivo_ingreso_programa_id')->references('id')->on('motivos_ingreso_programa')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historias', function (Blueprint $table) {
            $table->dropColumn(['motivo_ingreso_programa_id']);
        });
    }
}
