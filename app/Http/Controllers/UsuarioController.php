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


class UsuarioController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
           $usuarioList = Usuario::all();
         return view('usuario/listUsuario',['listUsuario'=>$usuarioList]);
        // $usuarios = Usuario::findOrFail(1);
        // return $usuarios->municipios->denominacionMunicipio;
    }

    function create(){
        $usuarios = new Usuario();
        $cargo = Cargo::orderBy('nombreCargo')->get();
        $afp = AFP::orderBy('denominacionAfp')->get();
        $arp = arp::orderBy('denominacionArp')->get();
        $eps = eps::orderBy('denominacionEps')->get();
        $rol = rol::orderBy('nombreRol')->get();
        $tipo_documento = TipoDocumento::orderBy('nombreTipoDocumento')->get();
        $municipio = Municipio::orderBy('denominacionMunicipio')->get();
        
        return view('usuario/createUsuario', ['usuario' => $usuarios,'cargos'=>$cargo, 'afps'=>$afp, 'arps'=>$arp,'eps'=>$eps, 'rols'=>$rol, 'tipo_documentos'=>$tipo_documento, 'municipios'=>$municipio ]);
    }

    function store(Request $request){

        $request->validate([
            'nombre' => 'required|max:50' ,
            'apellido' => 'required|max:50',
            'numeroDocumento' => 'required|numeric',
            'correo' => 'required|max:50',
            'telefono' => 'required|numeric',
            'fechaNacimiento' => 'required|date',
            'sexo' => 'required|max:50',
            'sangre' => 'required|max:50',
            'direccion' => 'required|max:50',
            'jornada' => 'required|max:50',
            'fechaIngreso' => 'required|date',
            'vinculacion' => 'required|max:50',
            'estado' => 'required|max:50',
            'imagen' => 'required|max:50',
            // 'imagen' => 'required|image|max:2048',
            'municipio_id' => 'required|max:50',
            'cargo_id' => 'required|max:50',
            'rol_id' => 'required|max:50',
            'afp_id' => 'required|max:50',
            'arp_id' => 'required|max:50',
            'eps_id' => 'required|max:50',
            'tipoDocumento_id' => 'required|max:50'
        ]);
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->numeroDocumento = $request->numeroDocumento;
        $usuario->correo = $request->correo;
        $usuario->telefono = $request->telefono;
        $usuario->fechaNacimiento = $request->fechaNacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->sangre = $request->sangre;
        $usuario->direccion = $request->direccion;
        $usuario->jornada = $request->jornada;
        $usuario->fechaIngreso = $request->fechaIngreso;
        $usuario->vinculacion = $request->vinculacion;
        $usuario->estado  = $request->estado;
        
        // $imagenes=$usuario->imagen  = $request->imagen->store("public/imagenes");
        // $url = Storage::url($imagenes);
        // $usuario->imagen = $request->imagen=$url;
        $usuario->imagen = $request->imagen;
        $usuario->municipio_id  = $request->municipio_id;
        $usuario->cargo_id  = $request->cargo_id ;
        $usuario->rol_id  = $request->rol_id ;
        $usuario->afp_id  = $request->afp_id ;
        $usuario->arp_id  = $request->arp_id ;
        $usuario->eps_id  = $request->eps_id ;
        $usuario->tipoDocumento_id  = $request->tipoDocumento_id ;
        
        // $url = Storage::url($imagenes);
        
            
        
        $usuario->save();
        $message = 'Se ha creado una nuevo Usuario';
        
        return redirect('/usuarios')->with('messa' , $message);     
    }
    function save(Request $request ){


        $request->validate([
            'nombre' => 'required|max:50' ,
            'apellido' => 'required|max:50',
            'numeroDocumento' => 'required|numeric',
            'correo' => 'required|max:50',
            'telefono' => 'required|numeric',
            'fechaNacimiento' => 'required|date',
            'sexo' => 'required|max:50',
            'sangre' => 'required|max:50',
            'direccion' => 'required|max:50',
            'jornada' => 'required|max:50',
            'fechaIngreso' => 'required|date',
            'vinculacion' => 'required|max:50',
            'estado' => 'required|max:50',
            'imagen' => 'required|image|max:2048',
            'municipio_id' => 'required|max:50',
            'cargo_id' => 'required|max:50',
            'rol_id' => 'required|max:50',
            'afp_id' => 'required|max:50',
            'arp_id' => 'required|max:50',
            'eps_id' => 'required|max:50',
            'tipoDocumento_id' => 'required|max:50'
        ]);

        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->numeroDocumento = $request->numeroDocumento;
        $usuario->correo = $request->correo;
        $usuario->telefono = $request->telefono;
        $usuario->fechaNacimiento = $request->fechaNacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->sangre = $request->sangre;
        $usuario->direccion = $request->direccion;
        $usuario->jornada = $request->jornada;
        $usuario->fechaIngreso = $request->fechaIngreso;
        $usuario->vinculacion = $request->vinculacion;
        $usuario->estado  = $request->estado;
        $imagenes  = $request->imagen->store("public/imagenes");
        $usuario->imagen  = $request->imagen;
        $usuario->municipio_id  = $request->municipio_id;
        $usuario->cargo_id  = $request->cargo_id ;
        $usuario->rol_id  = $request->rol_id ;
        $usuario->afp_id  = $request->afp_id ;
        $usuario->arp_id  = $request->arp_id ;
        $usuario->eps_id  = $request->eps_id ;
        $usuario->tipoDocumento_id  = $request->tipoDocumento_id ;
        $usuario->save();
        $url = Storage::url($imagenes);
        $message = 'Se ha creado una nuevo Usuario';
        
        if (intval($request->id )>0){
            $arp = arp::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo arp';
        }

        return redirect('/usuarios')->with('messa' , $message);     

}

    function edit($id){
        $usuarios = new Usuario();
        $cargo = Cargo::orderBy('nombreCargo')->get();
        $afp = AFP::orderBy('denominacionAfp')->get();
        $arp = arp::orderBy('denominacionArp')->get();
        $eps = eps::orderBy('denominacionEps')->get();
        $rol = rol::orderBy('nombreRol')->get();
        $tipo_documento = TipoDocumento::orderBy('nombreTipoDocumento')->get();
        $municipio = Municipio::orderBy('denominacionMunicipio')->get();
        $usuarios= Usuario::find($id);
        return view('usuario/editUsuario', ['usuario' => $usuarios,'cargos'=>$cargo, 'afps'=>$afp, 'arps'=>$arp,'eps'=>$eps, 'rols'=>$rol, 'tipo_documentos'=>$tipo_documento, 'municipios'=>$municipio ]);
    }
    function form ($id = null){
        $usuarios = new Usuario();
        $cargo = Cargo::orderBy('nombreCargo')->get();
        $afp = AFP::orderBy('denominacionAfp')->get();
        $arp = arp::orderBy('denominacionArp')->get();
        $eps = eps::orderBy('denominacionEps')->get();
        $rol = rol::orderBy('nombreRol')->get();
        $tipo_documento = TipoDocumento::orderBy('nombreTipoDocumento')->get();
        $municipio = Municipio::orderBy('denominacionMunicipio')->get();
        if ($id != null ) {
            $usuarios = Usuario::findOrFail($id);
        }
        return view('usuario/formUsuario', ['usuario' => $usuarios,'cargos'=>$cargo, 'afps'=>$afp, 'arps'=>$arp,'eps'=>$eps, 'rols'=>$rol, 'tipo_documentos'=>$tipo_documento, 'municipios'=>$municipio ]);
    }
    function find($id){
        $usuarioFind = Usuario::find($id);
        return view('usuario/infoUsuario', ['infoUsuario'=>$usuarioFind]);
            }
            function update(Request $request, $id){
   
                $request->validate([
                    'nombre' => 'required|max:50' ,
                    'apellido' => 'required|max:50',
                    'numeroDocumento' => 'required|numeric',
                    'correo' => 'required|max:50',
                    'correo' => 'required|numeric',
                    'fechaNacimiento' => 'required|date',
                    'sexo' => 'required|max:50',
                    'sangre' => 'required|max:50',
                    'direccion' => 'required|max:50',
                    'jornada' => 'required|max:50',
                    'fechaIngreso' => 'required|date',
                    'vinculacion' => 'required|max:50',
                    'estado' => 'required|max:50',
                    'imagen' => 'required|image|max:2048',
                    'municipio_id' => 'required|max:50',
                    'cargo_id' => 'required|max:50',
                    'rol_id' => 'required|max:50',
                    'afp_id' => 'required|max:50',
                    'arp_id' => 'required|max:50',
                    'eps_id' => 'required|max:50',
                    'tipoDocumento_id' => 'required|max:50'
                ]);
                $usuarios = Usuario::find($id);
                $requestUsuario = $request->only('nombre','apellido','numeroDocumento','correo','sexo','sangre','direccion','jornada','empresa','fechaIngreso','vinculacion','estado','imagen','municipio_id','cargo_id','rol_id','afp_id','arp_id','eps_id','tipoDocumento_id');
                $usuarios->update($requestUsuario);
                    return redirect('/accidentes');
            
            }
            // como eliminar una imagen
    //    function delete($usuario){
    //          $usuario = Accidente::where('imagen', $usuario->first());
    //          $url = str_replace('storage','public', $usuario->imagen);
    //          Storage::delete([$url]);
    //          $usuario->delete();
    //         }     
}
