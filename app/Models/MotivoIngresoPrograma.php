<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoIngresoPrograma extends Model
{
    protected $table = 'motivos_ingreso_programa';

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

    public function tipo(){
        return $this->belongsTo('App\TipoMotivoIngresoPrograma','tipo_motivo_ingreso_programa_id');
        
    }
}
