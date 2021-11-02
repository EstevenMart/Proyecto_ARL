<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(){
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
        return Validator::make($data, [
            
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'apellido' => ['required', 'max:50'],
            'numeroDocumento' => ['required', 'unique:users', 'numeric'],
            'telefono' => ['required', 'numeric'],
            'fechaNacimiento' => ['required', 'max:50' ],
            'sexo' => ['required', 'max:50'],
            'sangre' => ['required', 'max:50'],
            'direccion' => ['required', 'max:50'],
            'jornada' => ['required', 'max:50'],
            'fechaIngreso' => ['required', 'max:50'],
            'vinculacion' => ['required', 'max:50'],
            'estado' => ['required', 'max:50'],
            'imagen' => ['required', 'max:50'],
            'municipio_id' => ['required', 'max:50'],
            'cargo_id' => ['required', 'max:50'],
            'rol_id' => ['required', 'max:50'],
            'afp_id' => ['required', 'max:50'],
            'arp_id' => ['required', 'max:50'],
            'eps_id' => ['required', 'max:50'],
            'tipoDocumento_id' => ['required', 'max:50'],
        ]);
    }

    /**on
     * Create a new user instance after a valid registrati.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            $password='password' => Hash::make(Str::random(64)),
            'apellido' => $data['apellido'],
            'numeroDocumento' => $data['numeroDocumento'],
            'telefono' => $data['telefono'],
            'fechaNacimiento' => $data['fechaNacimiento'],
            'sangre' => $data['sangre'],
            'direccion' => $data['direccion'],
            'jornada' => $data['jornada'],
            'sexo' => $data['sexo'],
            'fechaIngreso' => $data['fechaIngreso'],
            'vinculacion' => $data['vinculacion'],
            'estado' => $data['estado'],
            'imagen' => $data['imagen'],
            'municipio_id' => $data['municipio_id'],
            'cargo_id' => $data['cargo_id'],
            'rol_id' => $data['rol_id'],
            'afp_id' => $data['afp_id'],
            'arp_id' => $data['arp_id'],
            'eps_id' => $data['eps_id'],
            'tipoDocumento_id' => $data['tipoDocumento_id']
            
        ]);
         $correo =  new ContactanosMailable($password);
        Mail::to($data['email'])->send($correo);
  
        
    }
   
}

