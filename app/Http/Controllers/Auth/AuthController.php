<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('auth.login');
    } 
    public function contraseña(){
        return view('auth.contraseña');
    } 
    public function dashboard(){
        return view('auth.dashboard');
    }
    public function CapturaInventario(){
        return view('auth.CapturaInventario');
    }
    public function TransferenciaHotel(){
        return view('auth.TransferenciaHotel');
    }
    public function AceptarTransferencia (){
        return view('auth.AceptarTransferencia');
    }
    public function Resguardo(){
        return view('auth.Resguardo');
    }
    //ESTE ES PRESTAMO DE EQUIPOS
    public function Prestamo(){
        return view('auth.Prestamo');
    }
    //ESTE ES REPORTES DE PRESTAMOS
    public function ReportePrestamo(){
        return view('auth.ReportePrestamo');
    }
    public function ReporteResguardo(){
        return view('auth.ReporteResguardo');
    }
    public function SinAsignar(){
        return view('auth.SinAsignar');
    }
    //RUTAS DE LICENCIAS
    public function Licencias(){
        return view('');
    }
    //CONTROL EQUIPOS
    public function ControlEquipo(){
        return view('auth.ControlEquipo');
    }
    public function CrearResguardo(){
        return view('auth.CrearResguardo');
    }
    public function CrearPrestamo(){
        return view('auth.CrearPrestamo');
    }
    public function AgregarUsuario(){
        return view('auth.AgregarUsuario');
    }

}
