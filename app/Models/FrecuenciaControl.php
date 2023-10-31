<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrecuenciaControl extends Model
{
    protected $table = 'frecuencia';

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
