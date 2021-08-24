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


}
