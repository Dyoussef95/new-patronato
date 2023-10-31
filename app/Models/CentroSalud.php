<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroSalud extends Model
{
    protected $table = 'centros_salud';

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
