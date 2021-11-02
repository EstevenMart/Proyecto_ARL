<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $cargoList = Cargo::all();
        return view('cargo/listCargo',['listCargo'=>$cargoList]);

    }

    function form ($id  = null){
        $cargo = new Cargo();
        if ($id  != null ) {
            $cargo = Cargo::findOrFail($id );
        }
        return view('cargo/formCargo', ['cargo' => $cargo]);
    }
    function save(Request $request ){


        $request->validate([
            /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'nivelRiesgo' => 'required|max:50',
            'nombreCargo' => 'required|max:50',
            'estado' => 'required|max:50',
            'salario' => 'required|numeric'

        ]);

        $cargo = new Cargo();
        $message = 'Se ha creado un nuevo cargo';

        if (intval($request->id )>0){
            $cargo = Cargo::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo cargo';
        }

        $cargo->nivelRiesgo = $request->nivelRiesgo;
        $cargo->nombreCargo = $request->nombreCargo;
        $cargo->estado = $request->estado;
        $cargo->salario = $request->salario;

        $cargo->save();
        return redirect('/cargos')->with('messa' , $message);

}
}
