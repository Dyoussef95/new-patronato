<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModificarTablaMotivosIngresoPrograma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('motivos_ingreso_programa', function (Blueprint $table) {
            $table->integer('tipo_motivo_ingreso_programa_id')->unsigned();
            $table->foreign('tipo_motivo_ingreso_programa_id')->references('id')->on('tipos_motivo_ingreso_programa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nombre',600)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('motivos_ingreso_programa', function (Blueprint $table) {
            $table->dropColumn(['tipo_motivo_ingreso_programa_id']);
            $table->string('nombre',250)->change();
        });
    }
}
