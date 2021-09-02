<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitio;

class SitioController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $sitioList = Sitio::all();
        return view('sitio/listSitio',['listSitio'=>$sitioList]);
        return view('accidente/formAccidente',['listSitio'=>$sitioList]);
    }

    function form ($id  = null){
        $sitio = new Sitio();
        if ($id  != null ) {
            $sitio = Sitio::findOrFail($id );
        }
        return view('sitio/formSitio', ['sitio' => $sitio]);
    }
    function save(Request $request ){


        $request->validate([
            /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'denominacionSitio' => 'required|max:50'

        ]);

$sitio = new Sitio();
        $message = 'Se ha creado un nuevo Sitio';

        if (intval($request->id )>0){
            $sitio = Sitio::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo Sitio';
        }

        $sitio->denominacionSitio = $request->denominacionSitio;

        $sitio->save();
        return redirect('/sitios')->with('messa' , $message);

}
}
