<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacionLaboral extends Model
{
    protected $table = 'situaciones_laborales';

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
