<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AFP extends Model
{
    use HasFactory;

    protected $table ="afps";

    function usuario(){
        return $this->hasMany(Usuario::class);
    }
}
