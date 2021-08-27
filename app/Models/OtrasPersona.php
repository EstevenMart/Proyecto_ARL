<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtrasPersona extends Model
{
    use HasFactory;

    function accidentes(){
        return $this->hasMany(Accidente::class);
    }


}
