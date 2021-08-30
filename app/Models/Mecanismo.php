<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanismo extends Model
{
    use HasFactory;

    protected $table ="mecanismos";

    function accidentes(){
        return $this->hasMany(Accidente::class);
    }
    function mecanismo(){
        return $this -> belongsTo(Mecanismo::class);
    }

}
