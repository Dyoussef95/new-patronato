<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interno extends Model
{
    protected $table = 'internos';

    protected $fillable = [
        'legajo',
        'apellido',
        'nombre',  
        'fecha_nacimiento',
        'numero_documento',
        'telefono',
        'estadoActividad',
        'domicilioDeclarado',
        'estado_civil_id',
        'situaciones_laborales_id',
        'juzgado_tipos_id',
        'nivel_estudio_id',
        'tipo_documento_id',
        'sexo_id',
        'coberturaMedica',
        'caps_id',
        'enfermedades',
        'tratamiento',
        'adicciones',
        'tratamientoAdicciones',
        'lugardeTratamientodeDrogas',
        'observaciones',
        'trabajo_id',
        'localidad_id',
        'nacionalidad_id',
        'habilitado'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'legajo' => 'required',
        'apellido' => 'required',
        'nombre' => 'required',
        'fechanacimiento' => 'required',
        'numero_documento' => 'required',
        'estado_civil_id' => 'required',
        'situaciones_laborales_id' => 'required',
        'juzgado_tipos_id' => 'required',
        'nivel_estudio_id' => 'required',
        'tipo_documento_id' => 'required',
        'localidad_id' => 'required',
        'habilitado' => 'required',
    ];
    public function estado_civil()
    {
        return $this->belongsTo('App\EstadoCivil', 'estado_civil_id');
    }
    public function situacion_laboral()
    {
        return $this->belongsTo('App\SituacionLaboral', 'situaciones_laborales_id');
    }
    public function juzgado_tipo()
    {
        return $this->belongsTo('App\JuzgadoTipo', 'juzgado_tipos_id');
    } 
    public function nivel_estudio()
    {
        return $this->belongsTo('App\NivelEstudio', 'nivel_estudio_id');
    } 
    public function tipo_documento()
    {
        return $this->belongsTo('App\TipoDocumento', 'tipo_documento_id');
    }
    public function localidad()
    {
        return $this->belongsTo('App\Localidad', 'localidad_id');
    }
    public function trabajo()
    {
        return $this->belongsTo('App\Trabajo', 'trabajo_id');
    }
    public function sexo()
    {
        return $this->belongsTo('App\Sexo', 'sexo_id');
    }
    public function nacionalidad()
    {
        return $this->belongsTo(Nacionalidad::class);
    }
    
    public function historia()
    {
        return $this->hasMany('App\Historia');
    }
    public function grupofamiliar()
    {
        return $this->hasMany('Modules\Proyecto\Entities\GrupoFamiliar', 'interno_id');
    }

    public function situacion_salud()
    {
        return $this->hasOne('App\SituacionSalud','interno_id');
    }
        
}
