<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Accidente;
use App\Models\Lesion;
use App\Models\ParteCuerpo;
use App\Models\User;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function PDF(){
        $pdf = PDF::loadView('./PDF/prueba');
        return $pdf->stream('prueba.pdf');
    }

    public function PDFAccidente(){
        $accidentes = Accidente::all();
        $fecha = Carbon::now()->toFormattedDateString();
        $imagen =  rand(0, 99999) ;
        $pdf = PDF::loadView('./PDF/accidentes',compact('accidentes','imagen','fecha'));
        return $pdf->stream('accidentes.pdf');
    }
    public function PDFUsuario(){
        $usuario = User::all();
        $fecha = Carbon::now()->toFormattedDateString();
        $imagen =  rand(0, 99999) ;
        $pdf = PDF::loadView('./PDF/usuario',compact('usuario','imagen','fecha'));
        return $pdf->stream('usuario.pdf');
    }
    public function PDFAccidenteInfo($id){
        $accidenteFind = Accidente::find($id);
        $parte_cuerpo = ParteCuerpo::all()->pluck('denominacionParteCuerpo', 'id');
        $lesion = Lesion::all()->pluck('denominacionTipoLesion', 'id');
        $fecha = Carbon::now()->toFormattedDateString();
        $imagen =  rand(0, 99999) ;
        $pdf = PDF::loadView('./PDF/accidentesfind',compact('accidenteFind','imagen','fecha','parte_cuerpo','lesion'));
        return $pdf->stream('accidentesFind.pdf');
    }
    public function PDFUsuarioInfo($id){
        $usuarioFind = User::find($id);
        $fecha = Carbon::now()->toFormattedDateString();
        $imagen =  rand(0, 99999) ;
        $pdf = PDF::loadView('./PDF/usuarioFind',compact('usuarioFind','imagen','fecha'));
        return $pdf->stream('accidentesFind.pdf');
    }
    
    
    
}
