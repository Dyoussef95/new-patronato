<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';

    protected $fillable = [
        'nombre',
        'codigo_postal', 
        'departamento_id', 
        'habilitado'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'nombre' => 'required',
        'codigo_postal'=>'required',
        'departamento_id'=> 'required',
        'habilitado' => 'required',
    ];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id');
    } 
}
