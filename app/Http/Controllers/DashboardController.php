<?php

namespace App\Http\Controllers;
use App\Models\OtrasPersona;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function show(){
        $otraPersonaList = OtrasPersona::all();
        return view('/Dashboard',['listOtraPersona'=>$otraPersonaList]);
    }
}
