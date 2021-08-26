<?php
namespace App\Http\Controllers;

use App\Models\AgentAcci;
use Illuminate\Http\Request;
class AgentAcciController extends Controller
{
  


    function show(){
        $agentAcciList = AgentAcci::all();
        return view('agentAcci/listAgentAcci' , ['listAgentAcci' =>$agentAcciList]);
    }

    function delete($id){
        $agentAcci = AgentAcci::findOrFail($id);
        $agentAcci->delete();
        return redirect('/agentAccis')->with('message' , 'Marca borrada');
    }

    function form($id=null){
        $agentAcci = new AgentAcci();
        if($id != null){
            $agentAcci = AgentAcci::findOrFail($id);
        }
        return view('agentAcci/formAgentAcci', ['agentAcci' => $agentAcci]);
    }

    function save(Request $request){
        $request->validate([
            'agentAcci' =>'required|max:50',
        ]);

        $agentAcci = new AgentAcci();
        $message_new = "Nueva Marca";
        if(intval($request->id)>0){
            $agentAcci = AgentAcci::findOrFail($request->id);
            $message_new = "Edit complete";
        }

        $agentAcci->agentAcci = $request->agentAcci;


        $agentAcci->save();
        return redirect('/agentAccis')->with('message_new' , $message_new);

    }

}
