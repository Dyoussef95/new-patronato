<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTratamientoConsumo extends Model
{
    protected $table = 'tipos_tratamientos_consumos';

    protected $fillable = [
        'nombre',
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    public function situacion_consumo(){
        return $this->hasMany(SituacionSaludConsumo::class);
    }
}
