<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParteCuerpo extends Model
{
    use HasFactory;
    protected $table = "accidente_partecuerpo";
    /* function parteCuerpo(){
        return $this->hasMany(ParteCuerpo::class);
    } */

}
