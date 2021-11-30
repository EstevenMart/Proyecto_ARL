<?php

namespace App\Http\Controllers;

use App\Models\Accidente;
use App\Models\AFP;
use App\Models\arp;
use App\Models\Cargo;
use App\Models\eps;
use App\Models\Municipio;
use App\Models\rol;
use App\Models\TipoDocumento;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\image;
use Spatie\Permission\Models\Role;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class UsuarioController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        
           $usuarioList = User::orderBy('id','desc')->get();

         return view('usuario/listUsuario',['listUsuario'=>$usuarioList]);
        // $usuarios = User::findOrFail(1);
        // return $usuarios->municipios->denominacionMunicipio;
    }

    function store(Request $request){

        $request->validate( [
            
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
            'afp_id' => ['required', 'max:50'],
            'arp_id' => ['required', 'max:50'],
            'eps_id' => ['required', 'max:50'],
            'tipoDocumento_id' => ['required', 'max:50']
        ]);
        
        $password1= $request['numeroDocumento'];
        $correo =  new ContactanosMailable($password1);
        Mail::to($request['email'])->send($correo);
        $usuario = User::create($request -> only(
            'name',
            'email',
            'apellido' ,
            'numeroDocumento' ,
            'telefono' ,
            'fechaNacimiento' ,
            'sangre' ,
            'direccion' ,
            'jornada' ,
            'sexo' ,         
            'fechaIngreso' ,
            'vinculacion' ,
            'estado', 
            'imagen' ,
            'municipio_id' ,
            'cargo_id' , 
            'afp_id' ,
            'arp_id' ,
            'eps_id' ,
            'tipoDocumento_id')+['password'=> bcrypt($request->input('numeroDocumento'))]);
            $roles = $request->input('roles', []);
           
        $usuario->syncRoles($roles);

        return redirect('/usuarios');
    }
    function save(Request $request, $id ){


        $request->validate( [
            
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'apellido' => ['required', 'max:50'],
            'numeroDocumento' => ['required'],
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
            'afp_id' => ['required', 'max:50'],
            'arp_id' => ['required', 'max:50'],
            'eps_id' => ['required', 'max:50'],
            'tipoDocumento_id' => ['required', 'max:50']
        ]);
        $usuario=User::findOrFail($id);
         $data = $request -> only(
            'name',
            'email',
            'apellido' ,
            'numeroDocumento' ,
            'telefono' ,
            'fechaNacimiento' ,
            'sangre' ,
            'direccion' ,
            'jornada' ,
            'sexo' ,         
            'fechaIngreso' ,
            'vinculacion' ,
            'estado', 
            'imagen' ,
            'municipio_id' ,
            'cargo_id' , 
            'afp_id' ,
            'arp_id' ,
            'eps_id' ,
            'tipoDocumento_id')+['password'=> bcrypt($request->input('numeroDocumento'))];
             $usuario->update($data); 
               $roles = $request->input('roles', []);
        $usuario->syncRoles($roles);
        $message = 'Se ha creado una nuevo User';

        if (intval($request->id )>0){
            $arp = arp::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo arp';
        }

        return redirect('/usuarios')->with('messa' , $message);

}

    function edit($id){
        $usuarios = new User();
        $cargo = Cargo::orderBy('nombreCargo')->get();
        $afp = AFP::orderBy('denominacionAfp')->get();
        $arp = arp::orderBy('denominacionArp')->get();
        $eps = eps::orderBy('denominacionEps')->get();
        $tipo_documento = TipoDocumento::orderBy('nombreTipoDocumento')->get();
        $municipio = Municipio::orderBy('denominacionMunicipio')->get();
        $roles = Role::all()->pluck('name', 'id');
        
        $usuarios= User::find($id);
        $usuarios->load('roles');
        return view('usuario/editUsuario', ['usuario' => $usuarios,'cargos'=>$cargo,'roles'=>$roles, 'afps'=>$afp, 'arps'=>$arp,'eps'=>$eps, 'tipo_documentos'=>$tipo_documento, 'municipios'=>$municipio ]);
        return redirect('/usuarios');
    }
    function form ($id = null){
        $usuarios = new User();
        $cargo = Cargo::orderBy('nombreCargo')->get();
        $afp = AFP::orderBy('denominacionAfp')->get();
        $arp = arp::orderBy('denominacionArp')->get();
        $eps = eps::orderBy('denominacionEps')->get();
        $rol = rol::orderBy('nombreRol')->get();
        $tipo_documento = TipoDocumento::orderBy('nombreTipoDocumento')->get();
        $municipio = Municipio::orderBy('denominacionMunicipio')->get();
        if ($id != null ) {
            $usuarios = User::findOrFail($id);
        }
        return view('usuario/formUsuario', ['usuario' => $usuarios,'cargos'=>$cargo, 'afps'=>$afp, 'arps'=>$arp,'eps'=>$eps, 'rols'=>$rol, 'tipo_documentos'=>$tipo_documento, 'municipios'=>$municipio ]);
    }
    function find($id){
        $usuarioFind = User::find($id);
        return view('usuario/infoUsuario', ['infoUsuario'=>$usuarioFind]);
            }
            function update(Request $request, $id){

                $request->validate( [
            
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    // 'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'apellido' => ['required', 'max:50'],
                    'numeroDocumento' => ['required', 'numeric'],
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
                    'afp_id' => ['required', 'max:50'],
                    'arp_id' => ['required', 'max:50'],
                    'eps_id' => ['required', 'max:50'],
                    'tipoDocumento_id' => ['required', 'max:50']
                ]);
                $usuario=User::findOrFail($id);
                $data = $request -> only(
                   'name',
                   'email',
                   'apellido' ,
                   'numeroDocumento' ,
                   'telefono' ,
                   'fechaNacimiento' ,
                   'sangre' ,
                   'direccion' ,
                   'jornada' ,
                   'sexo' ,         
                   'fechaIngreso' ,
                   'vinculacion' ,
                   'estado', 
                   'imagen' ,
                   'municipio_id' ,
                   'cargo_id' , 
                   'afp_id' ,
                   'arp_id' ,
                   'eps_id' ,
                   'tipoDocumento_id')+['password'=> bcrypt($request->input('numeroDocumento'))];
                    $usuario->update($data); 
                      $roles = $request->input('roles', []);
               $usuario->syncRoles($roles);
               $message = 'Se ha editado una nuevo usuario';
               return redirect('/usuarios')->with('messa' , $message);
       

            }
            // como eliminar una imagen
    //    function delete($usuario){
    //          $usuario = Accidente::where('imagen', $usuario->first());
    //          $url = str_replace('storage','public', $usuario->imagen);
    //          Storage::delete([$url]);
    //          $usuario->delete();
    // if (auth()->user()->id == $user->id) {
    //     return redirect()->route('users.index');
    // }
    //         }


}
