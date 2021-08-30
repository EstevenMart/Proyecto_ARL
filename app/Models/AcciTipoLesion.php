<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcciTipoLesion extends Model
{
    use HasFactory;

    protected $table ="acci_tipo_lesions";

    function accidentes(){
        return $this->belongsTo(Accidente::class);
    }

    function tipoLesions(){
        return $this->belongsTo(TipoLesion::class);
    }

}
