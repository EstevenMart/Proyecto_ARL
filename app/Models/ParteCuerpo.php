<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParteCuerpo extends Model
{
    use HasFactory;

    function acciParteCuerpos(){
        return $this->hasMany(AcciParteCuerpo::class);
    }

}
