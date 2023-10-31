<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTobilleras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tobilleras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numeroTuc');
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
        Schema::dropIfExists('tobilleras');
    }
}
