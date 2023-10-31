<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoOficio extends Model
{
    protected $table = 'tipos_oficio';

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
