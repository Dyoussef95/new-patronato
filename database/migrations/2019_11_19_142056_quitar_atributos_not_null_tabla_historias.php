<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuitarAtributosNotNullTablaHistorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historias', function (Blueprint $table) {
            $table->dropForeign('historias_internos_id_foreign');
            $table->renameColumn('internos_id','interno_id');
            $table->foreign('interno_id')->references('id')->on('internos')->onDelete('cascade');

            $table->dropForeign('historias_regimen_id_foreign');
            $table->dropColumn('regimen_id');           

            $table->dropForeign('historias_delito_especifico_id_foreign');
            $table->dropColumn('delito_especifico_id');
            
            $table->dropForeign('historias_juzgado_especifico_id_foreign');
            $table->dropColumn('juzgado_especifico_id');
            
            $table->dropForeign('historias_situacion_procesal_id_foreign');
            $table->dropColumn('situacion_procesal_id');
            
            $table->dropForeign('historias_frecuencia_id_foreign');
            $table->dropColumn('frecuencia_id');
        });

        Schema::table('historias', function (Blueprint $table) {
            $table->integer('regimen_id')->unsigned()->nullable();
            $table->foreign('regimen_id')->references('id')->on('regimen')->onDelete('cascade');

            $table->integer('delito_especifico_id')->unsigned()->nullable();
            $table->foreign('delito_especifico_id')->references('id')->on('delitos_especificos')->onDelete('cascade');
            
            $table->integer('juzgado_especifico_id')->unsigned()->nullable();
            $table->foreign('juzgado_especifico_id')->references('id')->on('juzgado_especifico')->onDelete('cascade');

            $table->integer('situacion_procesal_id')->unsigned()->nullable();
            $table->foreign('situacion_procesal_id')->references('id')->on('situacion_procesales')->onDelete('cascade');
            
            $table->integer('frecuencia_id')->unsigned()->nullable();
            $table->foreign('frecuencia_id')->references('id')->on('frecuencia')->onDelete('cascade');
       
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
            $table->renameColumn('interno_id','internos_id');
            $table->integer('regimen_id')->change();
            $table->integer('delito_especifico_id')->change();
            $table->integer('juzgado_especifico_id')->change();
            $table->integer('situacion_procesal_id')->change();
            $table->integer('frecuencia_id')->change();
        });
    }
}
