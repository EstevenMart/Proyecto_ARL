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
            alert()->success('Aviso','<p class="font-weight-light">Registro completo con exito</p>')
            ->toHtml()
            ->showConfirmButton('<i class="anticon anticon-like text-white"></i> OK', '#00c9a7')
            ->autoClose(9000);
           
        $usuario->syncRoles($roles);
        // $usuario->nombre = $request->nombre;
        // $usuario->apellido = $request->apellido;
        // $usuario->numeroDocumento = $request->numeroDocumento;
        // $usuario->correo = $request->correo;
        // $usuario->telefono = $request->telefono;
        // $usuario->fechaNacimiento = $request->fechaNacimiento;
        // $usuario->sexo = $request->sexo;
        // $usuario->sangre = $request->sangre;
        // $usuario->direccion = $request->direccion;
        // $usuario->jornada = $request->jornada;
        // $usuario->fechaIngreso = $request->fechaIngreso;
        // $usuario->vinculacion = $request->vinculacion;

        // $imagenes=$usuario->imagen  = $request->imagen->store("public/imagenes");
        // $url = Storage::url($imagenes);
        // $usuario->imagen = $request->imagen=$url;
        // $usuario->imagen = $request->imagen;
        // $usuario->municipio_id  = $request->municipio_id;
        // $usuario->cargo_id  = $request->cargo_id ;
        // $usuario->rol_id  = $request->rol_id ;
        // $usuario->afp_id  = $request->afp_id ;
        // $usuario->arp_id  = $request->arp_id ;
        // $usuario->eps_id  = $request->eps_id ;
        // $usuario->tipoDocumento_id  = $request->tipoDocumento_id ;



        // $url = Storage::url($imagenes);



        // $usuario->save();
        //   $roles = $request->input('roles', []);$usuario->syncRoles($roles);
        // $message = 'Se ha creado una nuevo User';

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
                   'tipoDocumento_id');
                    $usuario->update($data); 
                      $roles = $request->input('roles', []);
               $usuario->syncRoles($roles);
               $message = 'Se ha editado una nuevo usuario';
               alert()->success('Aviso','<p class="font-weight-light">Actualizacion completada con exito</p>')
               ->toHtml()
               ->showConfirmButton('<i class="anticon anticon-like text-white"></i> OK', '#00c9a7')
               ->autoClose(9000);
               return redirect('/usuarios')->with('messa' , $message);
       

            }
            //Estado del usuario
            public function statusUser($id){
               $usuarios = User::find($id);

               if($usuarios->estado=='Activo'){
                   $estado = 'Inactivo';
               }else{
                   $estado = 'Activo';
               }

               $values = array('estado' => $estado);
               User::where('id',$id)->update($values);



               return redirect()->route('home');
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
