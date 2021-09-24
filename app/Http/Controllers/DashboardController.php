<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function show(){
        $usuarioList = Usuario::all();
      return view('layouts/Dashboard',['listUsuario'=>$usuarioList]);
     // $usuarios = Usuario::findOrFail(1);
     // return $usuarios->municipios->denominacionMunicipio;
 }

}
