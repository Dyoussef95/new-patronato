<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBdProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('N');	
            $table->String('ApellidoyNombres');	
            $table->string('SEXO');	
            $table->string('TIPODOCUMENTO');	
            $table->string('NÚMERODOCUMENTO');	
            $table->string('DOMICILIODECLARADO');	
            $table->string('PROVINCIA');	
            $table->string('LOCALIDAD');			
            $table->string('MUNICIPIO');	
            $table->string('ESTADOCIVIL');	
            $table->string('FECHADENACIMIENTO');	
            $table->string('EDAD');	
            $table->string('NIVELDEINSTRUCCIÓN');	
            $table->string('OBSERVACIÓN');
            $table->string('ARRESTODOMICILIARIO');	
            $table->string('Situacionlaboral');	
            $table->string('Oficio');	
            $table->string('NdeLegajo'); 	
            $table->string('NTUC');	
            $table->string('FechadeIngreso');	
            $table->string('TIPODEDELITO');	
            $table->string('DelitoEspecifico');	
            $table->string('MotivodeIngresoalPrograma');		
            $table->string('SituaciónProcesal');
            $table->string('FrecuenciadeControl');	
            $table->string('Profesionalacargo');	
            $table->string('Ultimocontactoconelprofesional');		
            $table->string('MiembrosConvivientes');	
            $table->string('MiembrosnoConvivientes');				
            $table->string('CoberturaMedica');	
            $table->string('CAPSCentro'); 
            $table->string ('Medicodereferencia');	
            $table->string ('Enfermedadesrelevantes');	
            $table->string('Tratamiento');		
            $table->string('Adicciones');	
            $table->string('TratamientoAdicciones');	
            $table->string('Serviciodonderealizatratamiento');	
            $table->string('Observaciones');	
            $table->string('ESTADO');	
            $table->string('Diagnostico');	
            $table->string('DictamenJudicial');
            $table->string('TipodeCumplimiento'); 	
            $table->string('MotivoFindeSupervisión');	
            $table->string('FECHADECUMPL');
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
        Schema::dropIfExists('bd_proyecto');
    }
}
