<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHistorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaInicio');
            $table->integer('internos_id')->unsigned();
            $table->foreign('internos_id')->references('id')->on('internos')->onDelete('cascade');
            $table->integer('regimen_id')->unsigned();
            $table->foreign('regimen_id')->references('id')->on('regimen')->onDelete('cascade');
            $table->integer('delito_especifico_id')->unsigned();
            $table->foreign('delito_especifico_id')->references('id')->on('delitos_especificos')->onDelete('cascade');
            $table->integer('juzgado_especifico_id')->unsigned();
            $table->foreign('juzgado_especifico_id')->references('id')->on('juzgado_especifico')->onDelete('cascade');
            $table->integer('situacion_procesal_id')->unsigned();
            $table->foreign('situacion_procesal_id')->references('id')->on('situacion_procesales')->onDelete('cascade');
            $table->integer('motivos_de_ingreso_programa_id')->unsigned();
            $table->foreign('motivos_de_ingreso_programa_id')->references('id')->on('motivosDeIngresoAlPrograma')->onDelete('cascade');
            $table->integer('frecuencia_id')->unsigned();
            $table->foreign('frecuencia_id')->references('id')->on('frecuencia')->onDelete('cascade');
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
        Schema::dropIfExists('historias');
    }
}
