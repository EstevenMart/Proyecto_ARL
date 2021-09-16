<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eps;


class EpsController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $epsList = eps::all();
        return view('eps/listEps',['listEps'=>$epsList]);
        return view('eps/formEps',['listEps'=>$epsList]);
    }

    function form ($id  = null){
        $eps = new eps();
        if ($id  != null ) {
            $eps = eps::findOrFail($id );
        }
        return view('eps/formEps', ['eps' => $eps]);
    }
    function save(Request $request ){


        $request->validate([
            /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'denominacionEps' => 'required|max:50'

        ]);

$eps = new eps();
        $message = 'Se ha creado un nuevo eps';

        if (intval($request->id )>0){
            $eps = eps::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo eps';
        }

        $eps->denominacionEps = $request->denominacionEps;

        $eps->save();
        return redirect('/usuario/formUsuario')->with('messa' , $message);

}
}
