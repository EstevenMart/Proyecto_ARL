<?php
namespace App\Http\Controllers;

use App\Models\Agente;
use Illuminate\Http\Request;
class AgentAcciController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $agentAcciList = Agente::all();
        return view('agentAcci/listAgentAcci' , ['listAgentAcci' =>$agentAcciList]);
    }

    /* function delete($id){
        $agentAcci = Agente::findOrFail($id);
        $agentAcci->delete();
        return redirect('/agentAccis')->with('message' , 'Marca borrada'); */


    function form($id=null){
        $agentAcci = new Agente();
        if($id != null){
            $agentAcci = Agente::findOrFail($id);
        }
        return view('agentAcci/formAgentAcci', ['agentAcci' => $agentAcci]);
    }

    function save(Request $request){
        $request->validate([
            'denominacionAgenteAccidente' =>'required|max:50'
        ]);

        $agentAcci = new Agente();
        $message = "Nuevo Agente Accidente";

        if(intval($request->id)>0){
            $agentAcci = Agente::findOrFail($request->id);
            $message = "Se ha Editado un Agente Accidente";
        }

        $agentAcci->denominacionAgenteAccidente = $request->denominacionAgenteAccidente;


        $agentAcci->save();
        return redirect('/agentAccis')->with('messa' , $message);

    }
}
