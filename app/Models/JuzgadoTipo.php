<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JuzgadoTipo extends Model
{
    protected $table = 'juzgado_tipos';

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
