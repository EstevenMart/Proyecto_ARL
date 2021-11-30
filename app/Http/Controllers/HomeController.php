<?php

namespace App\Http\Controllers;

use App\Models\Accidente;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         
        return view('home');
       

    }
    public function graficos()
{
   $data=Accidente::select('id','created_at')->get()->groupBy(function($data){
return Carbon::parse($data->created_at)->format('M');
   });
   $months=[];
   $mounthCount=[];
   foreach ($data as $month => $values) {
       $months[]=$month;
       $mounthCount[]=count($values);
   }
    $sitios=Accidente::select('id','sitio_id')->get()->groupBy(function($sitios){
        return ($sitios->sitio->denominacionSitio); });
       $sitio=[];
       $sitioContar=[];
       foreach ($sitios as $sit  => $values ) {
        $sitio[]=$sit;
        $sitioContar[]=count($values);
    }
    $accidenteList = Accidente::orderBy('id','desc')->paginate(5);
    $User = User::select(DB::raw("CONCAT(name,' ',apellido) AS name"),'id')->pluck('name', 'id');
    $usuarioList = User::orderBy('id','desc')->paginate(5);

    
   return view('home',[ 'months'=>$months, 'listUsuario'=>$usuarioList,'listAccidente'=>$accidenteList, 'user'=>$User, 'sitio'=>$sitio, 'sitioContar'=>$sitioContar, 'mounthCount'=>$mounthCount]);
}
}
