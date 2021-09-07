<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table ="tipo_documentos";

    function usuario(){
        return $this->hasMany(Usuario::class,'tipoDocumento_id');
    }
}
