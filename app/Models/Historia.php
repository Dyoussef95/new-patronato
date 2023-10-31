<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $fillable = [
    'fecha_inicio',
    'interno_id',
    'regimen_id',
    'delito_especifico_id',
    'situacion_procesal_id',
    'motivo_ingreso_programa_id',
    'frecuencia_id',
    'juzgado_especifico_id',
    'habilitado'
];

protected $attributes = [
    'habilitado' => true,
];
private $rules = [

    'interno_id' => 'required',
    'regimen_id'=>'required',
    'situacion_procesal_id'=>'required',
    'motivo_ingreso_programa_id'=>'required',
    'frecuencia_id'=>'required',
    'fecha_inicio'=> 'required',
    'habilitado' => 'required',
];
    public function interno()
    {
        return $this->belongsTo('App\Interno', 'interno_id');
    }
    public function regimen()
    {
        return $this->belongsTo('App\Regimen', 'regimen_id');
    }
    public function delito_especifico()
    {
        return $this->belongsTo('App\DelitoEspecifico', 'delito_especifico_id');
    }
    public function situacion_procesal()
    {
        return $this->belongsTo('App\SituacionProcesal', 'situacion_procesal_id');
    }
    public function motivo_ingreso()
    {
        return $this->belongsTo('App\MotivoIngresoPrograma', 'motivo_ingreso_programa_id');
    }
    public function frecuencia()
    {
        return $this->belongsTo('App\FrecuenciaControl', 'frecuencia_id');
    }
    public function juzgadoespecifico()
    {
        return $this->belongsTo('App\JuzgadoEspecifico', 'juzgado_especifico_id');
    }

    public function tobillera()
    {
        return $this->hasMany('App\Tobillera', 'historias_id');
    }
    public function organizacion()
    {
        return $this->hasMany('Modules\Proyecto\Entities\OrganizacionHistoria', 'historias_id');
    }
    public function cumplimiento()
    {
        return $this->hasOne('App\Cumplimiento', 'historia_id');
    }

    public function empleado(){
        return $this->belongsToMany(Empleado::class,'empleados_historias');
    }

}
