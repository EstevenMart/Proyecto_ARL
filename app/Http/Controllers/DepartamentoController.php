<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $departamentoList = Departamento::all();
        return view('departamentos/listDepartamento',['listDepartamento'=>$departamentoList]);
    }

    function form ($id  = null){
        $Departamento = new Departamento();
        if ($id  != null ) {
            $Departamento = Departamento::findOrFail($id );
        }
        return view('departamentos/formDepartamento', ['departamento' => $Departamento]);
    }
    function save(Request $request ){


        $request->validate([
            /* unique:table,column,'. $idAccidente */ /* colocar unico */
            'denominacionDepartamento' => 'required|max:50'

        ]);

        $departamento = new Departamento();
        $message = 'Se ha creado un nuevo Departamento';

        if (intval($request->id )>0){
            $departamento = Departamento::findOrFail($request->id );
            $message = 'Se ha Editado un nuevo Departamento';
        }

        $departamento->denominacionDepartamento = $request->denominacionDepartamento;

        $departamento->save();
        return redirect('/departamentos')->with('messa' , $message);

}
}