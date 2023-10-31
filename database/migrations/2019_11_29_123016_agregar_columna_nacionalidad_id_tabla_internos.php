<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarColumnaNacionalidadIdTablaInternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('internos', function (Blueprint $table) {
            $table->integer('nacionalidad_id')->unsigned()->nullable();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades')->onUpdate('cascade');
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
            $table->dropColumn(['nacionalidad_id']);
        });
    }
}
