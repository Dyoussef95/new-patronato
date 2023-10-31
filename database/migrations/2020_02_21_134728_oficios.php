<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Oficios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tipo_oficio')->unsigned();//1 => administrativo, 2 => tecnico
            $table->integer('historia_id')->unsigned()->nullable();
            $table->foreign('historia_id')->references('id')->on('historias')->onUpdate('cascade')->onDelete('cascade');
            $table->date('fecha')->nullable();
            $table->string('numero',10)->nullable();
            $table->string('descripcion',800)->nullable();
            $table->integer('procedencia_id')->unsigned()->nullable();
            $table->foreign('procedencia_id')->references('id')->on('juzgado_especifico')->onUpdate('cascade');
            $table->string('ruta_archivo',100)->nullable();
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
        Schema::dropIfExists('oficios');
    }
}
