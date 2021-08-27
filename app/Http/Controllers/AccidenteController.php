<?php

namespace App\Http\Controllers;

use App\Models\Accidente;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{

    /* function __construct(){
        $this->middleware('auth');
    } */

    function show(){
        $accidenteList = Accidente::all();
        return view('accidente/listAccidente',['listAccidente'=>$accidenteList]);
    }

     /* function delete($id){
        $categorie = Category::findOrFail($id);
        $categorie->delete();
        return redirect('/categories')->with('message' , 'Categoria borrada');
    } */
    function form ($id = null){
        $accidente = new Accidente();
        if ($id != null ) {
            $accidente = Accidente::findOrFail($id);
        }
        return view('accidente/formAccidente', ['accidente' => $accidente]);
    }
    function save(Request $request){

        $request->validate([
            'tipoaccidente' => 'required|max:50',
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
            'agenteAcci_id' => 'required|max:50',
            'sitio_id' => 'required|max:50'
        ]);

        $accidente = new Accidente();
        $message = 'Se ha creado una nueva accidente';

        if (intval($request->id)>0){
            $accidente = Accidente::findOrFail($request->id);
            $message = 'Se ha Editado el accidente';
        }

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
        $accidente->mecanismo_id  = $request->mecanismo_id ;
        $accidente->agenteAcci_id  = $request->agenteAcci_id ;
        $accidente->sitio_id  = $request->sitio_id ;

        $accidente->save();
        return redirect('/accidentes')->with('messa' , $message);

    }


}
