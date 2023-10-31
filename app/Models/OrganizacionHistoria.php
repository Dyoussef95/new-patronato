<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizacionHistoria extends Model
{
    protected $table = 'organizaciones_historias';

    protected $fillable = [
        'organizaciones_id',
        'historias_id',
        'habilitado'
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
