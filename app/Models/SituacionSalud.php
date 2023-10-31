<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacionSalud extends Model
{
    protected $table = 'situaciones_salud';

    protected $fillable = [
        'interno_id',
        'cobertura_medica',
    ];

    protected $attributes = [
        'habilitado' => true,
        'cobertura_medica' => false,
    ];

    protected $hidden = [
    ];

    private $rules = [
        'interno_id' => 'required',
        'cobertura_medica' => 'required',
    ];

    public function interno()
    {
        return $this->belongsTo('App\Interno','interno_id');
    }

    public function situacion_salud_enfermedad()
    {
        return $this->hasMany('App\SituacionSaludEnfermedad','situacion_salud_id');
    } 

    public function situaciones_salud_consumos(){
        return $this->belongsToMany(Consumo::class,'situaciones_salud_consumos','situacion_salud_id','consumo_id')
            ->withPivot('tipo_consumo_id','tratamiento','lugar_tratamiento_consumo_id','tipo_tratamiento_consumos_id')
            ->withTimestamps();
    }

    public function situaciones_salud_enfermedades(){
        return $this->belongsToMany(Enfermedad::class,'situaciones_salud_enfermedades','situacion_salud_id','enfermedad_id')
            ->withPivot('tratamiento','lugar_tratamiento_id')
            ->withTimestamps();
    }
}
