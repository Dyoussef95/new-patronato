<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'nombre','apellido'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function historia(){
        return $this->belongsToMany(Historia::class,'empleados_historias');
    }
}
