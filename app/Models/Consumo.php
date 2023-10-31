<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    protected $table = 'consumos';

    protected $fillable = [
        'objeto_consumo'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'objeto_consumo' => 'required',
    ];

    public function situaciones_salud_consumos(){
        return $this->belongsToMany(SituacionSalud::class,'situaciones_salud_consumos','consumo_id','situacion_salud_id');
    }
}
