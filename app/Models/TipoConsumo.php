<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoConsumo extends Model
{
    protected $table = 'tipos_consumo';

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
}
