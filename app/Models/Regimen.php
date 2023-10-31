<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    protected $table = 'regimen';

    protected $fillable = [
        'nombre','area_id','habilitado'
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

    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    } 
}
