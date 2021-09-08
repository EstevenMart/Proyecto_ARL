<?php

namespace App\Http\Controllers;

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

     /* function delete($id){
        $categorie = Category::findOrFail($id);
        $categorie->delete();
        return redirect('/categories')->with('message' , 'Categoria borrada');
    } */

    function form ($id = null){
        $usuarios = new Usuario();
        $cargo = Cargo::orderBy('nombreCargo')->get();
        $afp = AFP::orderBy('denominacionAfp')->get();
        $arp = arp::orderBy('denominacionArp')->get();
        $eps = eps::orderBy('denominacionEps')->get();
        $rol = rol::orderBy('nombreRol')->get();
        $tipo_documento = TipoDocumento::orderBy('nombreTipoDocumento')->get();
        $municipio = Municipio::orderBy('denominacionMunicipio')->get();
        $user = User::orderBy('email')->get();
        if ($id != null ) {
            $usuarios = Usuario::findOrFail($id);
        }
        return view('usuario/formUsuario', ['usuario' => $usuarios,'cargos'=>$cargo,
        'afps'=>$afp, 'arps'=>$arp,'eps'=>$eps, 'rols'=>$rol, 'tipo_documentos'=>$tipo_documento, 'municipios'=>$municipio, 'users'=>$user ]);
    }

    function save(Request $request){

        $request->validate([
            'nombre' => 'required|max:50' ,
            'apellido' => 'required|max:50',
            'numeroDocumento' => 'required|numeric',
            'telefono' => 'required|numeric',
            'fechaNacimiento' => 'required|date',
            'sexo' => 'required|max:50',
            'sangre' => 'required|max:50',
            'direccion' => 'required|max:50',
            'jornada' => 'required|max:50',
            'fechaIngreso' => 'required|date',
            'vinculacion' => 'required|max:50',
            'estado' => 'required|max:50',
            'municipio_id' => 'required|max:50',
            'cargo_id' => 'required|max:50',
            'rol_id' => 'required|max:50',
            'afp_id' => 'required|max:50',
            'arp_id' => 'required|max:50',
            'eps_id' => 'required|max:50',
            'tipoDocumento_id' => 'required|max:50',
            'user_id' => 'required|max:50'
        ]);

        $usuario = new Usuario();
        $message = 'Se ha creado una nuevo Usuario';

        if (intval($request->id)>0){
            $usuario = Usuario::findOrFail($request->id);
            $message = 'Se ha Editado el usuario';
        }

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->numeroDocumento = $request->numeroDocumento;
        $usuario->telefono = $request->telefono;
        $usuario->fechaNacimiento = $request->fechaNacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->sangre = $request->sangre;
        $usuario->direccion = $request->direccion;
        $usuario->jornada = $request->jornada;
        $usuario->fechaIngreso = $request->fechaIngreso;
        $usuario->vinculacion = $request->vinculacion;
        $usuario->estado  = $request->estado;
        $usuario->municipio_id  = $request->municipio_id;
        $usuario->cargo_id  = $request->cargo_id ;
        $usuario->rol_id  = $request->rol_id ;
        $usuario->afp_id  = $request->afp_id ;
        $usuario->arp_id  = $request->arp_id ;
        $usuario->eps_id  = $request->eps_id ;
        $usuario->tipoDocumento_id  = $request->tipoDocumento_id ;
        $usuario->user_id  = $request->user_id ;

        $usuario->save();
        return redirect('/usuarios')->with('messa' , $message);

    }

     function find($id){
        $usuarioFind = Usuario::find($id);
        return view('usuario/infoUsuario', ['infoUsuario'=>$usuarioFind]);
    }
}
