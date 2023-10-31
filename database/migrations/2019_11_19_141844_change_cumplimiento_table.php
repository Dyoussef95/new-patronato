<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCumplimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cumplimiento', function (Blueprint $table) {
            $table->dropColumn(['motivoDeFinDeSupervision']);
            $table->integer('motivo_fin_supervision_id')->unsigned()->nullable();
            $table->foreign('motivo_fin_supervision_id')->references('id')->on('motivos_fin_supervision')->onDelete('cascade');
            $table->dropColumn(['tipoCumplimiento']);
            $table->string('tipo_cumplimiento',250)->nullable();
            $table->dropColumn(['fechaCumplimiento']);
            $table->date('fecha_cumplimiento')->nullable();

        });

        Schema::rename('cumplimiento','cumplimientos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('cumplimientos','cumplimiento');

        Schema::table('cumplimiento', function (Blueprint $table) {
            $table->dropColumn(['motivo_fin_supervision_id']);
            $table->string('motivoDeFinDeSupervision')->nullable();    
            $table->dropColumn(['tipo_cumplimiento']);
            $table->string('tipoCumplimiento',250)->nullable();
            $table->dropColumn(['fecha_cumplimiento']);
            $table->date('fechaCumplimiento')->nullable();
        });
    }
}
