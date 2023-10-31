<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMotivoIngresoPrograma extends Model
{
    protected $table = 'tipos_motivo_ingreso_programa';

    protected $fillable = [
        'nombre', 'habilitado'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'nombre' => 'required',
        'habilitado' => 'required',
    ];
}
