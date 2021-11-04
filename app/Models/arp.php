<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arp extends Model
{
    use HasFactory;

    protected $table ="arps";

    function usuario(){
        return $this->hasMany(User::class);
    }
}
