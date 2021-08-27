<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcciParteCuerpo extends Model
{
    use HasFactory;

    function accidentes(){
        return $this->belongsTo(Accidente::class);
    }

    function parteCuerpos(){
        return $this->belongsTo(ParteCuerpo::class);
    }


}