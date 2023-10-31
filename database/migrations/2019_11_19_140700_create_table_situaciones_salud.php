<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSituacionesSalud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situaciones_salud', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('interno_id')->unsigned();
            $table->foreign('interno_id')->references('id')->on('internos')->onDelete('cascade');
            $table->boolean('cobertura_medica')->nullable();
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
        Schema::dropIfExists('situaciones_salud');
    }
}
