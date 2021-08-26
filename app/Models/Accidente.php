<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accidente extends Model
{
    use HasFactory;

    protected $table = "accidente";
    function agentAcci(){
        return $this->belongsTo(AgentAcci::class);
    }

    function mecanismo(){
        return $this->belongsTo(Mecanismo::class);
    }
    function parteCuerpo(){
        return $this->belongsTo(ParteCuerpo::class);
    }

    function sitio(){
        return $this->belongsTo(Sitio::class);
    }
    function tipoLesion(){
        return $this->belongsTo(TipoLesion::class);
    }


}
