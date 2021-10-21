<?php

namespace App\Http\Controllers;

use App\Models\Accidente;
use App\Models\Agente;
use App\Models\Lesion;
use App\Models\Mecanismo;
use App\Models\ParteCuerpo;
use App\Models\Sitio;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Charts\UserChart;

class AccidenteController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }

    function show(){
          $accidenteList = Accidente::orderBy('id','desc')->get();      
        return view('accidente/listAccidente',['listAccidente'=>$accidenteList]);
    }
    function create(){
        $accidente = new Accidente();
        $sitio = Sitio::orderBy('denominacionSitio')->get();
        $mecanismo = Mecanismo::orderBy('denominacionMecanismo')->get();
        $parte_cuerpo = ParteCuerpo::all()->pluck('denominacionParteCuerpo', 'id');
        $lesion = Lesion::all()->pluck('denominacionTipoLesion', 'id');
       
        $usuario = Usuario::select(DB::raw("CONCAT(nombre,' ',apellido) AS name"),'id')->pluck('name', 'id');
        $agente = Agente::orderBy('denominacionAgente')->get();
        
        return view('accidente/createAccidente', ['accidente' => $accidente,'sitios'=>$sitio, 'mecanismos'=>$mecanismo, 'agentes'=>$agente, 'partes_cuerpo'=>$parte_cuerpo, 'lesions'=>$lesion, 'usuario'=>$usuario ]);
    }
    function store(Request $request){
        $request->validate([
            'tipoaccidente' => 'required|max:50' ,
            'fechaHora' => 'required|max:50',
            'dia' => 'required|max:50',
            'jornada' => 'required|max:50',
            'laborHabitual' => 'required|max:50',
            'tiempoPA' => 'required|max:50',
            'cantHoras' => 'required|numeric',
            'cantMinutos' => 'required|numeric',
            'empresa' => 'required|max:50',
            'causaMuerte' => 'required|max:50',
            'descripcion' => 'required|max:500',
            'mecanismo_id' => 'required|max:50',
            'agente_id' => 'required|max:50',
            'sitio_id' => 'required|max:50',
            'sitio_id' => 'required|min:1',
            
            
        ]);
        
        
        $accidente = new Accidente();
        $accidente->tipoaccidente = $request->tipoaccidente;
        $accidente->fechaHora = $request->fechaHora;
        $accidente->dia = $request->dia;
        $accidente->jornada = $request->jornada;
        $accidente->laborHabitual = $request->laborHabitual;
        $accidente->tiempoPA = $request->tiempoPA;
        $accidente->cantHoras = $request->cantHoras;
        $accidente->cantMinutos = $request->cantMinutos;
        $accidente->empresa = $request->empresa;
        $accidente->causaMuerte = $request->causaMuerte;
        $accidente->descripcion = $request->descripcion;
        $accidente->mecanismo_id  = $request->mecanismo_id;
        $accidente->agente_id  = $request->agente_id;
        $accidente->sitio_id  = $request->sitio_id ;
        $accidente->save();
        $parte_cuerpo = $request -> input("denominacionParteCuerpo", []);
        $accidente->partes_cuerpo()->sync($parte_cuerpo);
        $lesion = $request -> input("denominacionTipoLesion", []);
        $accidente->lesions()->sync($lesion);
        $usuario = $request -> input("name", []);
        $accidente->usuarios()->sync($usuario);
        $message = 'Se ha creado una nueva accidente';
        return redirect('/accidentes')->with('messa' , $message);
    }

     /* function delete($id){
        $categorie = Category::findOrFail($id);
        $categorie->delete();
        return redirect('/categories')->with('message' , 'Categoria borrada');
    } */
    function edit($id){
        $accidente = new Accidente();
        $sitio = Sitio::orderBy('denominacionSitio')->get();
        $mecanismo = Mecanismo::orderBy('denominacionMecanismo')->get();
        $agente = Agente::orderBy('denominacionAgente')->get();
        $parte_cuerpo = ParteCuerpo::all()->pluck('denominacionParteCuerpo', 'id');
        $lesion = Lesion::all()->pluck('denominacionTipoLesion', 'id');
        $accidente= Accidente::find($id);
return view('accidente/editAccidente',['accidente' => $accidente,'sitios'=>$sitio, 'mecanismos'=>$mecanismo, 'agentes'=>$agente, 'partes_cuerpo'=>$parte_cuerpo, 'lesions'=>$lesion  ]);
    }

//     function form ($id = null){
//         $accidente = new Accidente();
//         $sitio = Sitio::orderBy('denominacionSitio')->get();
//         $mecanismo = Mecanismo::orderBy('denominacionMecanismo')->get();
//         $agente = Agente::orderBy('denominacionAgente')->get();
//         if ($id != null ) {
//             $accidente = Accidente::findOrFail($id);
//         }
//         return view('accidente/formAccidente', ['accidente' => $accidente,'sitios'=>$sitio, 'mecanismos'=>$mecanismo, 'agentes'=>$agente ]);
//     }

//     function find($id){
// $accidenteFind = Accidente::find($id);
// $parte_cuerpo = ParteCuerpo::all()->pluck('denominacionParteCuerpo', 'id');
// $lesion = Lesion::all()->pluck('denominacionTipoLesion', 'id');
// return view('accidente/infoAccidente', ['infoAccidente'=>$accidenteFind, 'partes_cuerpo'=>$parte_cuerpo, 'lesions'=>$lesion ]);
//     }

function update(Request $request, $id){
   
    $request->validate([
        'tipoaccidente' => 'required|max:50' ,
        'fechaHora' => 'required|date',
        'dia' => 'required|max:50',
        'jornada' => 'required|max:50',
        'laborHabitual' => 'required|max:50',
        'tiempoPA' => 'required|max:50',
        'cantHoras' => 'required|numeric',
        'cantMinutos' => 'required|numeric',
        'empresa' => 'required|max:50',
        'causaMuerte' => 'required|max:50',
        'descripcion' => 'required|max:500',
        'mecanismo_id' => 'required|max:50',
        'agente_id' => 'required|max:50',
        'sitio_id' => 'required|max:50'
    ]);
    $accidente = Accidente::find($id);
    $requestAccidente = $request->only('tipoaccidente','fechaHora','dia','jornada','laborHabitual','tiempoPA','cantHoras','cantMinutos','empresa','causaMuerte','descripcion','mecanismo_id','agente_id','sitio_id');
    $accidente->update($requestAccidente);
    $parte_cuerpo = $request -> input("denominacionParteCuerpo", []);
        $accidente->partes_cuerpo()->sync($parte_cuerpo);
        $lesion = $request -> input("denominacionTipoLesion", []);
        $accidente->lesions()->sync($lesion);
        $usuario = $request -> input("nombre", []);
        $accidente->usuarios()->sync($usuario);
        return redirect('/accidentes');


}

public function index()
{
    $usersChart = new UserChart;
        $usersChart->labels(['Jan', 'Feb', 'Mar']);
        $usersChart->dataset('Users by trimester', 'line', [10, 25, 13])
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)");
    
    return view('/accidente/graficoUsuario', [ 'usersChart' => $usersChart ] );
}

}