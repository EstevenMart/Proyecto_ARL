<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitio;

class SitioController extends Controller
{
    function show(){
        $sitioList = Sitio::all();
        return view('sitio/listSitio',['listSitio'=>$sitioList]);
    }

    function form ($id  = null){
        $sitio = new Sitio();
        if ($id  != null ) {
            $sitio = Sitio::findOrFail($id );
        }
        return view('sitio/form', ['sitio' => $sitio]);
    }
    function save(Request $request ){
        $sitio = new Sitio();

        $request->validate([
           
            'denominacionSitio' => 'required|max:50',
            
        ]);
        $sitio = new Sitio();
        $message = 'Se ha creado una Sitio';

        if (intval($request->id )>0){
            $sitio = Sitio::findOrFail($request->id );
            $message = 'Se ha Editado una Sitio';
        }

        $sitio->denominacionSitio = $request->id;

        $sitio->save();
        return redirect('/sitio')->with('messa' , $message);

}
}
