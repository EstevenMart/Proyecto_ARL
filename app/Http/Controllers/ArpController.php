<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\arp;
 

class ArpController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $arpList = arp::all();
        return view('arp/listArp',['listArp'=>$arpList]);
        return view('arp/formArp',['listArp'=>$arpList]);
    }

    function form ($id  = null){
        $arp = new arp();
        if ($id  != null ) {
            $arp = arp::findOrFail($id );
        }
        return view('arp/formArp', ['arp' => $arp]);
    }
    function save(Request $request ){


        $request->validate([
            /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'denominacionArp' => 'required|max:50'

        ]);

$arp = new arp();
        $message = 'Se ha creado un nuevo arp';

        if (intval($request->id )>0){
            $arp = arp::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo arp';
        }

        $arp->denominacionArp = $request->denominacionArp;

        $arp->save();
        return redirect('/arps')->with('messa' , $message);

}
}
