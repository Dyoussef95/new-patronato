<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableConsumosLugaresTratamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumos_lugares_tratamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consumo_id')->unsigned();
            $table->foreign('consumo_id')->references('id')->on('consumos')->onDelete('cascade');
            $table->integer('lugar_trat_cons_id')->unsigned();
            $table->foreign('lugar_trat_cons_id')->references('id')->on('lugares_tratamiento_consumo')->onDelete('cascade');
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
        Schema::dropIfExists('consumos_lugares_tratamiento');
    }
}
