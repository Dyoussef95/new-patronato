<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacionProcesal extends Model
{
    protected $table = 'situacion_procesales';

    protected $fillable = [
        'nombre','habilitado'
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
