<?php

namespace App\Http\Controllers;


use App\Models\Mecanismo;
use Illuminate\Http\Request;
class MecanismoController extends Controller
{


    /* function __construct()
    {
        $this->middleware('auth');
    }
 */

    function show(){
        $mecanismoList = Mecanismo::all();
        return view('mecanismo/listMecanismo' , ['listMecanismo' =>$mecanismoList]);
    }

    /* function delete($id){
        $mecanismo = Mecanismo::findOrFail($id);
        $mecanismo->delete();
        return redirect('/mecanismos')->with('message' , 'Mecanismo borrada');
    } */

    function form($id=null){
        $mecanismo = new Mecanismo();
        if($id != null){
            $mecanismo = Mecanismo::findOrFail($id);
        }
        return view('mecanismo/formMecanismo', ['mecanismo' => $mecanismo]);
    }

    function save(Request $request){
        $request->validate([
            'denominacionMecanismo' =>'required|max:50'
        ]);

        $mecanismo = new Mecanismo();
        $message = "Nuevo Mecanismo";

        if(intval($request->id)>0){
            $mecanismo = Mecanismo::findOrFail($request->id);
            $message = "Edit complete";
        }

        $mecanismo->denominacionMecanismo = $request->denominacionMecanismo;


        $mecanismo->save();
        return redirect('/mecanismos')->with('messa' , $message);

    }
}
