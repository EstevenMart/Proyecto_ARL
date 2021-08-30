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

    function mecanismo(){
        return $this->belongsTo(Mecanismo::class);
    }
    function sitio(){
        return $this->belongsTo(Sitio::class);
    }
    function agenteAccidente(){
        return $this->belongsTo(AgenteAccidente::class);
    }
    function otras_personas(){
        return $this->hasMany(OtrasPersona::class);
    }
    function partes_cuerpo(){
        return $this->belongsToMany(ParteCuerpo::class,"acci_parte_cuerpos","accidente_id","parteCuerpo_id");
    }

}
