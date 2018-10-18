<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadEducativa extends Model
{
    public $timestamps = false;

    public function maestros(){
        return $this->hasMany(Maestro::class);
    }
}
