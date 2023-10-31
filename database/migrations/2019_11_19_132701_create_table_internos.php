<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legajo')->unique();
            $table->string('apellido',40);
            $table->string('nombre',40);    
            $table->date('fecha_nacimiento')->nullable();
            $table->string('numero_documento', 10)->nullable();
            $table->integer('edad')->nullable();
            $table->boolean('estadoActividad')->nullable();
            $table->string('domicilioDeclarado')->nullable();
            $table->integer('estado_civil_id')->unsigned()->nullable();
            $table->foreign('estado_civil_id')->references('id')->on('estado_civiles')->onDelete('cascade');
            $table->integer('situaciones_laborales_id')->unsigned()->nullable();
            $table->foreign('situaciones_laborales_id')->references('id')->on('situaciones_laborales')->onDelete('cascade');
            $table->integer('juzgado_tipos_id')->unsigned()->nullable();
            $table->foreign('juzgado_tipos_id')->references('id')->on('juzgado_tipos')->onDelete('cascade');
            $table->integer('nivel_estudio_id')->unsigned()->nullable(); 
            $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudio')->onDelete('cascade');
            $table->integer('tipo_documento_id')->unsigned()->nullable();
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento')->onDelete('cascade');
            $table->integer('sexo_id')->unsigned()->nullable();
            $table->foreign('sexo_id')->references('id')->on('sexos')->onDelete('cascade');
            $table->string('coberturaMedica')->nullable();
            $table->integer('caps_id')->unsigned()->nullable();
            $table->foreign('caps_id')->references('id')->on('caps')->onDelete('cascade');
            $table->string('enfermedades')->nullable();
            $table->boolean('tratamiento')->nullable();
            $table->boolean('adicciones')->nullable();
            $table->boolean('tratamientoAdicciones')->nullable();
            $table->string('lugardeTratamientodeDrogas')->nullable();
            $table->string('observaciones')->nullable();
            $table->integer('oficio_id')->unsigned()->nullable();
            $table->foreign('oficio_id')->references('id')->on('oficios')->onDelete('cascade');
            $table->integer('localidad_id')->unsigned()->nullable();
            $table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade');
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
        Schema::dropIfExists('internos');
    }
}
