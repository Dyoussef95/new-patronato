<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCumplimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cumplimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoCumplimiento');
            $table->string('motivoDeFinDeSupervision');
            $table->date('fechaCumplimiento');
            $table->integer('historia_id')->unsigned();
            $table->foreign('historia_id')->references('id')->on('historias')->onDelete('cascade');
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
        Schema::dropIfExists('cumplimiento');
    }
}
