<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteInternosHealtData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('internos', function (Blueprint $table) {
            $table->dropForeign('internos_caps_id_foreign');
            $table->dropColumn(['coberturaMedica', 'caps_id', 'enfermedades','tratamiento','adicciones','tratamientoAdicciones','lugardeTratamientodeDrogas']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('internos', function (Blueprint $table) {
            $table->string('coberturaMedica')->nullable();
            $table->integer('caps_id')->unsigned()->nullable();
            $table->foreign('caps_id')->references('id')->on('caps')->onDelete('cascade');
            $table->string('enfermedades')->nullable();
            $table->boolean('tratamiento')->nullable();
            $table->boolean('adicciones')->nullable();
            $table->boolean('tratamientoAdicciones')->nullable();
            $table->string('lugardeTratamientodeDrogas')->nullable();
        });
    }
}
