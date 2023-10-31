<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaGruposFamiliares extends Migration
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
            $table->string('nombre', 40)->nullable();
            $table->string('apellido',40)->nullable();            
            $table->integer('interno_id')->unsigned();
            $table->foreign('interno_id')->references('id')->on('internos')->onDelete('cascade');           
            $table->integer('parentesco_id')->unsigned()->nullable();
            $table->foreign('parentesco_id')->references('id')->on('parentescos')->onUpdate('cascade');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('domicilio',40)->nullable(); 
            $table->integer('numero_documento')->nullable();
            $table->integer('tipo_documento_id')->unsigned()->nullable();
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento')->onUpdate('cascade');
            $table->integer('sexo_id')->unsigned()->nullable();
            $table->foreign('sexo_id')->references('id')->on('sexos')->onUpdate('cascade');
            $table->integer('nivel_estudio_id')->nullable()->unsigned();
            $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudio')->onUpdate('cascade');
            $table->integer('estado_civil_id')->nullable()->unsigned();
            $table->foreign('estado_civil_id')->references('id')->on('estado_civiles')->onUpdate('cascade');
            $table->integer('situacion_laboral_id')->unsigned()->nullable();
            $table->foreign('situacion_laboral_id')->references('id')->on('situaciones_laborales')->onUpdate('cascade');
            $table->integer('trabajo_id')->nullable()->unsigned();
            $table->foreign('trabajo_id')->references('id')->on('trabajos')->onUpdate('cascade');
            $table->text('observacion')->nullable();         
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
