<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGruposFamiliares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_familiares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido_nombre', 40);
            $table->date('fecha_nacimiento')->nullable();
            $table->char('sexo', 1);
            $table->string('numero_documento', 10)->nullable();
            $table->string('grado_anio', 30)->nullable();
            $table->string('establecimiento', 30)->nullable();
            $table->boolean('finalizado')->nullable();
            $table->string('profesion', 40)->nullable();
            $table->string('lugar_trabajo', 40)->nullable();
            $table->integer('ingresos')->nullable();
            $table->text('observacion')->nullable();
            $table->integer('interno_id')->unsigned();
            $table->foreign('interno_id')->references('id')->on('internos')->onDelete('cascade');
            $table->integer('parentesco_id')->unsigned();
            $table->foreign('parentesco_id')->references('id')->on('parentescos')->onDelete('cascade');
            $table->integer('estado_civil_id')->unsigned();
            $table->foreign('estado_civil_id')->references('id')->on('estado_civiles')->onDelete('cascade');
            $table->integer('nivel_estudio_id')->nullable()->unsigned();
            $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudio')->onDelete('cascade');
            $table->integer('tipo_documento_id')->unsigned()->nullable();
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento')->onDelete('cascade');
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
        Schema::dropIfExists('grupos_familiares');
    }
}
