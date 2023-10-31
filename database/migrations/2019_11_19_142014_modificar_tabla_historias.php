<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModificarTablaHistorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historias', function (Blueprint $table) {
            $table->dropForeign('historias_motivos_de_ingreso_programa_id_foreign');
            $table->dropColumn(['motivos_de_ingreso_programa_id']);
            $table->bigInteger('numero_oficio')->unsigned()->nullable();
            $table->string('numero_expediente',100)->nullable();
            $table->dropColumn(['fechaInicio']);
            $table->date('fecha_inicio')->nullable();
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
            $table->integer('motivos_de_ingreso_programa_id')->unsigned();
            $table->foreign('motivos_de_ingreso_programa_id')->references('id')->on('motivosDeIngresoAlPrograma')->onDelete('cascade');
            $table->dropColumn(['numero_oficio']);
            $table->dropColumn(['numero_expediente']);
            $table->dropColumn(['fecha_inicio']);
            $table->date('fechaInicio')->nullable();
        });
    }
}
