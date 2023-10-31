<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentezco extends Model
{
    protected $table = 'parentescos';

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
