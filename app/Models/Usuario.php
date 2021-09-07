<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table ="usuarios";

    function municipios(){
        return $this->belongsTo(Municipio::class);
    }
    function tipo_documento(){
        return $this->belongsTo(TipoDocumento::class);
    }
    function cargo(){
        return $this->belongsTo(Cargo::class);
        // return $this->belongsTo(Agente::class,"agenteAcci_id",);
    }
    function rol(){
        return $this->belongsTo(rol::class);
    }
    function afp(){
        return $this->belongsTo(AFP::class);
    }
    function arp(){
        return $this->belongsTo(arp::class);
    }
    function eps(){
        return $this->belongsTo(eps::class);
    }





}
