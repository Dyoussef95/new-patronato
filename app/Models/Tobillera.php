<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tobillera extends Model
{
    protected $table = 'tobilleras';

    protected $fillable = [
        'numeroTuc',
        'historias_id',
        'habilitado'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'numeroTuc'=> 'required',
        'historias_id'=> 'required',
        'habilitado'=> 'required',
    ];

    public function historia()
    {
        return $this->belongsTo('App\Historia', 'historias_id');
    } 
}

