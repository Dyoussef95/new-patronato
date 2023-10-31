<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JuzgadoEspecifico extends Model
{
    protected $table = 'juzgado_especifico';
    protected $fillable = [
        'nombre','juzgadoTipo_id'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'nombre' => 'required',
    ];

    public function juzgadoTipo(){
        return $this->belongsTo('App\JuzgadoTipo','juzgadoTipo_id');
        
    }
}
