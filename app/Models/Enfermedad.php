<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $table = 'enfermedades';

    protected $fillable = [
        'nombre'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'nombre' => 'required',
    ];

    public function situaciones_salud_enfermedades(){
        return $this->belongsToMany(SituacionSalud::class,'situaciones_salud_enfermedades','enfermedad_id','situacion_salud_id');
    }
}
