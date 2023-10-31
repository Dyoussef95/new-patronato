<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarTratamientoConsumo extends Model
{
    protected $table = 'lugares_tratamiento_consumo';

    protected $fillable = [
        'nombre', 'direccion'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'nombre' => 'required',
        'direccion' => 'required',
    ];
}
