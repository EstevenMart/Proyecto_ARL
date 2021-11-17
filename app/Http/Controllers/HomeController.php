<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
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
   $data=User::select('id','created_at')->get()->groupBy(function($data){
return Carbon::parse($data->created_at)->format('M');
   });
   $months=[];
   $mounthCount=[];
   foreach ($data as $month => $values) {
       $months[]=$month;
       $mounthCount[]=count($values);
   }
   return view('home',['data'=>$data, 'months'=>$months, 'mounthCount'=>$mounthCount]);
}
}
