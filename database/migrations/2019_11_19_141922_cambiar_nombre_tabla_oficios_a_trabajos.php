<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarNombreTablaOficiosATrabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('oficios','trabajos');

        
        Schema::table('internos', function (Blueprint $table) {
            $table->dropForeign('internos_oficio_id_foreign');
            $table->renameColumn('oficio_id','trabajo_id');
            $table->foreign('trabajo_id')->references('id')->on('trabajos')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('trabajos','oficios');

        Schema::table('internos', function (Blueprint $table) {
            $table->dropForeign('internos_trabajo_id_foreign');
            $table->renameColumn('trabajo_id','oficio_id');
            $table->foreign('oficio_id')->references('id')->on('oficios')->onDelete('cascade');
        });
    }
}
