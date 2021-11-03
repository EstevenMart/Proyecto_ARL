<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\CambiarPassword;
class User extends Authenticatable //implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'apellido',
        'numeroDocumento',
        'telefono',
        'fechaNacimiento',
        'sexo',
        'sangre',
        'direccion',
        'jornada',
        'fechaIngreso',
        'vinculacion',
        'estado',
        'imagen',
        'municipio_id',
        'cargo_id',
        'rol_id',
        'afp_id',
        'arp_id',
        'eps_id',
        'tipoDocumento_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CambiarPassword($token));
    }


}
class Usuario extends Model
{
    protected $fillable = ["imagen"];
    use HasFactory;

    protected $table ="usuarios";

    function municipios(){
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }
    function tipo_documento(){
        return $this->belongsTo(TipoDocumento::class,'tipoDocumento_id');
    }
    function cargo(){
        return $this->belongsTo(Cargo::class);
        // return $this->belongsTo(Agente::class,"agenteAcci_id",);
    }
    function rol(){
        return $this->belongsTo(rol::class);
    }
    function afp(){
        return $this->belongsTo(AFP::class) ;
    }
    function arp(){
        return $this->belongsTo(arp::class);
    }
    function eps(){
        return $this->belongsTo(eps::class);
    }
    function accidente(){
        return $this->belongsToMany(User::class,"acci_user","usuario_id ","accidente_id");
    }

}

