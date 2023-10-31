<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoFinSupervision extends Model
{
    protected $table = 'motivos_fin_supervision';

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
