<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrganizacionesHistorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizaciones_historias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organizaciones_id')->unsigned();
            $table->foreign('organizaciones_id')->references('id')->on('organizaciones')->onDelete('cascade');
            $table->integer('historias_id')->unsigned();
            $table->foreign('historias_id')->references('id')->on('historias')->onDelete('cascade');
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
        Schema::dropIfExists('organizaciones_historias');
    }
}
