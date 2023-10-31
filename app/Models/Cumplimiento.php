<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cumplimiento extends Model
{
    protected $table = 'cumplimientos';

    protected $fillable = [
        'tipoCumplimiento', 
        'motivo_fin_supervision_id',
        'fechaCumplimiento',
        'historia_id',
        'habilitado'
    ];

    protected $attributes = [
        'habilitado' => true,
    ];

    protected $hidden = [
    
    ];

    private $rules = [
        'tipoCumplimiento' => 'required', 
        'motivoDeFinDeSupervision' => 'required',
        'fechaCumplimiento' => 'required',
        'historia_id' => 'required',
    ];

    public function historia()
    {
        return $this->belongsTo('App\Historia', 'historia_id');
    }

    public function motivo_fin_supervision()
    {
        return $this->belongsTo('App\MotivoFinSupervision', 'motivo_fin_supervision_id');
    }
}
