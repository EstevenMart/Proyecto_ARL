<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;

    protected $table ="agentes";

    function accidentes(){
        // return $this->hasMany(Accidente::class, "agenteAcci_id","id");
        return $this->hasMany(Accidente::class);
    }
 

}
