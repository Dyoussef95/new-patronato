<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacionSaludEnfermedad extends Model
{
    protected $table = 'situaciones_salud_enfermedades';

    protected $fillable = [
        'situacion_salud_id',
        'enfermedad_id',
        'tratamiento',
        'lugar_tratamiento_id',
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    ];

    private $rules = [
       
    ];

    public function situacion_salud()
    {
        return $this->belongsTo('App\SituacionSalud','situacion_salud_id');
    } 

    public function enfermedad()
    {
        return $this->belongsTo('App\Enfermedad','enfermedad_id');
    } 

    public function lugar_tratamiento()
    {
        return $this->belongsTo('App\CentroSalud','lugar_tratamiento_id');
    } 
}
