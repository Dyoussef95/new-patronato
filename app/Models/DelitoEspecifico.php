<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DelitoEspecifico extends Model
{
     protected $table = 'delitos_especificos';

    protected $fillable = [
        'nombre', 
        'tipos_delitos_id',
        'habilitado'
        
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'nombre' => 'required',
        'tipos_delitos_id'=> 'required',
        'habilitado' => 'required',
    ];

    public function tipos_delitos()
    {
        return $this->belongsTo('App\TipoDelito', 'tipos_delitos_id');
    } 
}
