<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDelito extends Model
{
    protected $table = 'tipos_delitos';

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
