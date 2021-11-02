<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesion extends Model
{
    use HasFactory;
    protected $table ="lesions";

    function acciTipoLesions(){
        return $this->hasMany(AcciTipoLesion::class);
    }
    function accidentes(){
        return $this->belongsToMany(ParteCuerpo::class,"acci_tipo_lesions","Lesion_id","accidente_id");
    }

}
