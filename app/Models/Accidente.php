<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accidente extends Model
{
    use HasFactory;

    function mecanismo(){
        return $this->belongsTo(Mecanismo::class);
    }
    function sitio(){
        return $this->belongsTo(Sitio::class);
    }
    function agente(){
        return $this->belongsTo(Agente::class);
        // return $this->belongsTo(Agente::class,"agenteAcci_id",);
    }
    function otras_personas(){
        return $this->hasMany(OtrasPersona::class);
    }
    function partes_cuerpo(){
        return $this->belongsToMany(ParteCuerpo::class,"acci_parte_cuerpos","accidente_id","parteCuerpo_id");
    }
    function lesions(){
        return $this->belongsToMany(Lesion::class,"acci_tipo_lesions","accidente_id","Lesion_id");
    }
    protected $guarded = [];

    function acciUser(){
        return $this->hasMany(AcciUser::class);
    }
    function usuarios(){
        return $this->belongsToMany(User::class,"acci_user","accidente_id","usuario_id");
    }
}
// value="{{@old('nombreRecomendacion', $recomendacion->nombreRecomendacion)}}"
