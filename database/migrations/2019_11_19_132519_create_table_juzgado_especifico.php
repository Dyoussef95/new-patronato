<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJuzgadoEspecifico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juzgado_especifico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('juzgadoTipo_id')->unsigned();
            $table->foreign('juzgadoTipo_id')->references('id')->on('juzgado_tipos')->onDelete('cascade');
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
        Schema::dropIfExists('juzgado_especifico');
    }
}
