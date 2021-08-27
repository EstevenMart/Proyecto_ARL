<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accidente extends Model
{
    use HasFactory;

    function acciParteCuerpos(){
        return $this->hasMany(AcciParteCuerpo::class);
    }

    function acciTipoLesions(){
        return $this->hasMany(AcciTipoLesion::class);
    }

    function mecanismos(){
        return $this->belongsTo(Mecanismo::class);
    }
    function sitio(){
        return $this->belongsTo(Sitio::class);
    }
    function agenteAccidentes(){
        return $this->belongsTo(AgenteAccidente::class);
    }

}
