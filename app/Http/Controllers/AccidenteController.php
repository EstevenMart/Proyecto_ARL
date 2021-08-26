<?php

namespace App\Http\Controllers;

use App\Models\Accidente;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{

    /* function __construct()
    {
        $this->middleware('auth');
    }
 */
    function show(){
        $accidenteList = Accidente::all();
        return view('accidente/listAccidente',['listAccidente'=>$accidenteList]);
    }

    /* function delete($id){
        //Product::destroy($id);

        $accidente = Accidente::findOrFail($idAccidente );
        $accidente->delete();
        return redirect('/accidentes')->with('message' , 'El producto fue borrado');
    } */

    function form ($idAccidente = null){
        $accidente = new Accidente();
        if ($idAccidente  != null ) {
            $accidente = Accidente::findOrFail($idAccidente);
        }
        return view('accidente/formAccidente', ['accidente' => $accidente]);
    }
    function save(Request $request /* , $idAccidente */){

        $request->validate([
            'idParteCuerpo' => 'required|max:50', /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'idTipoLesion' => 'required|max:50',
            'idMecanismo' => 'required|max:50',
            'idSitio' => 'required|max:50',
            'tipoaccidente' => 'required|max:50',
            'fechaHora' => 'required|max:50',
            'dia' => 'required|max:50',
            'jornada' => 'required|max:50',
            'laborHabitual' => 'required|max:50',
            'tiempoPA' => 'required|max:50',
            'cantHoras' => 'required|max:50',
            'cantMinutos' => 'required|max:50',
            'empresa' => 'required|max:50',
            'causaMuerte' => 'required|max:50',
            'descripcion' => 'required|max:50'
        ]);

        $accidente = new Accidente();
        $message = 'Se ha creado un nuevo Accidente';

        if (intval($request->idAccidente )>0){
            $accidente = Accidente::findOrFail($request->idAccidente );
            $message = 'Se ha Editado un Accidente';
        }

        $accidente->idParteCuerpo = $request->idParteCuerpo;
        $accidente->idTipoLesion = $request->idTipoLesion;
        $accidente->idMecanismo = $request->idMecanismo;
        $accidente->idSitio = $request->idSitio;
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

        $accidente->save();
        return redirect('/accidentes')->with('messa' , $message);

    }


}
