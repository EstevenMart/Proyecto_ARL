<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLesion extends Model
{
    use HasFactory;
    protected $table = "tipolesion";
    /* function tipoLesion(){
        return $this->hasMany(TipoLesion::class);
    } */

}
