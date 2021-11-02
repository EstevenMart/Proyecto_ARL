<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OtrasPersona;

class OtraPersonaController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $otraPersonaList = OtrasPersona::all();
        return view('otraPersona/listOtraPersona',['listOtraPersona'=>$otraPersonaList]);
    }

    function form ($id  = null){
        $otraPersona = new OtrasPersona();
        if ($id  != null ) {
            $otraPersona = OtrasPersona::findOrFail($id );
        }
        return view('otraPersona/formOtraPersona', ['otraPersona' => $otraPersona]);
    }
    function save(Request $request ){


        $request->validate([
            /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'tipoDocumento' => 'required|max:50',
            'numeroDocumento' => 'required|max:50',
            'cargo' => 'required|max:50',
            'accidente_id' => 'required|max:50'

        ]);

$otraPersona = new OtrasPersona();
        $message = 'Se ha creado un nuevo otraPersona';

        if (intval($request->id )>0){
            $otraPersona = OtrasPersona::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo otraPersona';
        }


        $otraPersona->tipoDocumento = $request->tipoDocumento;
        $otraPersona->numeroDocumento = $request->numeroDocumento;
        $otraPersona->cargo = $request->cargo;
        $otraPersona->accidente_id = $request->accidente_id;

        $otraPersona->save();
        return redirect('/otrasPersonas')->with('messa' , $message);

}
}
