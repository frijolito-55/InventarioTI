<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class VistaResguardoController extends Controller
{
    public function VistaResguardo(){return view('auth.VistaResguardo');}
    /*public function VistaResguardo(){
        $urlVistaResguardo = URL::route('VistaResguardo');
        return view('tu_vista', compact('urlVistaResguardo'));
    }*/
    
}