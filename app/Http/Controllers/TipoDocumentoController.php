<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $tipoDocumentoList = TipoDocumento::all();
        return view('tipoDocumento/listTipoDocumento',['listTipoDocumento'=>$tipoDocumentoList]);

    }

    function form ($id  = null){
        $tipoDocumento = new TipoDocumento();
        if ($id  != null ) {
            $tipoDocumento = TipoDocumento::findOrFail($id );
        }
        return view('tipoDocumento/formTipoDocumento', ['tipoDocumentos' => $tipoDocumento]);
    }
    function save(Request $request ){


        $request->validate([
            /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'nombreTipoDocumento' => 'required|max:50'


        ]);

        $tipoDocumento = new TipoDocumento();
        $message = 'Se ha creado un nuevo Tipo de Documento';

        if (intval($request->id )>0){
            $tipoDocumento = TipoDocumento::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo Tipo de Documento';
        }

        $tipoDocumento->nombreTipoDocumento = $request->nombreTipoDocumento;


        $tipoDocumento->save();
        return redirect('/tipoDocumentos')->with('messa' , $message);

}
}
