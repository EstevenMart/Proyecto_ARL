<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Accidente;

class PDFController extends Controller
{
    public function PDF(){
        $pdf = PDF::loadView('./PDF/prueba');
        return $pdf->stream('prueba.pdf');
    }

    public function PDFAccidente(){
        $accidentes = Accidente::all();
        $imagen =  asset('storage/imagenes/avatar-2.png') ;
        $pdf = PDF::loadView('./PDF/accidentes',compact('accidentes','imagen'));
        return $pdf->stream('accidentes.pdf');
    }
}
