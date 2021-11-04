<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eps extends Model
{
    use HasFactory;

    protected $table ="eps";

    function usuario(){
        return $this->hasMany(User::class);
    }

}
