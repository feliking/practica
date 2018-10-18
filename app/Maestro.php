<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    public $timestamps = false;
    protected $fillable = ['ci', 'nombre', 'materia', 'experiencia', 'unidad_id', 'foto'];
    
    public function unidad_educativa(){
        return $this->belongsTo(UnidadEducativa::class);
    }
}
