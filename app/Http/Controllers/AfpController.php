<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AFP;
 

class AfpController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $afpList = AFP::all();
        return view('afp/listAfp',['listAfp'=>$afpList]);
    }

    function form ($id  = null){
        $afp = new AFP();
        if ($id  != null ) {
            $afp = AFP::findOrFail($id );
        }
        return view('afp/formAfp', ['afp' => $afp]);
    }
    function save(Request $request ){


        $request->validate([
            /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'denominacionAfp' => 'required|max:50'

        ]);

$afp = new AFP();
        $message = 'Se ha creado un nuevo AFP';

        if (intval($request->id )>0){
            $afp = AFP::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo AFP';
        }

        $afp->denominacionAfp = $request->denominacionAfp;

        $afp->save();
        return redirect('/afps')->with('messa' , $message);

}
}
