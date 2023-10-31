<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table = 'organizaciones';

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
