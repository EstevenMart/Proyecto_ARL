<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanismo extends Model
{
    use HasFactory;
    protected $table = "mecanismo";
    function mecanismo(){
        return $this->hasMany(Mecanismo::class);
    }

}
