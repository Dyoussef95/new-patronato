<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoFamiliar extends Model
{
    protected $table = 'grupos_familiares';

    protected $fillable = [
        'nombre',
        'apellido',
        'interno_id',
        'parentesco_id',
        'fecha_nacimiento',
        'domicilio',
        'numero_documento',
        'tipo_documento_id',
        'sexo_id',  
        'nivel_estudio_id',
        'estado_civil_id',
        'situacion_laboral_id',
        'trabajo_id',
        'observacion',
        'habilitado'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];
}
