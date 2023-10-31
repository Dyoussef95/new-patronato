<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDelitosEspecificos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delitos_especificos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('tipos_delitos_id')->unsigned();
            $table->foreign('tipos_delitos_id')->references('id')->on('tipos_delitos')->onDelete('cascade');
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
        Schema::dropIfExists('delitos_especificos');
    }
}
