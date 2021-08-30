<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLesion extends Model
{
    use HasFactory;
    protected $table ="tipo_lesions";

    function acciTipoLesions(){
        return $this->hasMany(AcciTipoLesion::class);
    }


}
