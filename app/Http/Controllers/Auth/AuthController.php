<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\equipoGeneral;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Prestamo;
use App\Models\Responsable;

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
    public function recuperar(Request $request){

        // Encuentra el préstamo que deseas cambiar
$prestamo = Prestamo::find($request);

if ($prestamo) {
    // Cambia el estado del préstamo a "alta"
    $prestamo->estatus_idEstatus = 2; // Suponiendo que el ID del estado "alta" es 2
    $prestamo->save();

    // Elimina la entrada correspondiente en la tabla de préstamos
    $prestamo->delete();

    // Actualiza la referencia en la tabla de equipos generales
    equipoGeneral::where('idEquipo', $prestamo->idEquipo)
                ->update(['estatus_idEstatus' => 2]); // Suponiendo que el ID del estado "alta" es 2
                return redirect()->route('auth.dashboard');
} else {
    // Manejar el caso donde el préstamo no fue encontrado
}

    }
    public function dashboard(){

        $prestamos = Prestamo::select(
            'fecha_prestamo',
            'fecha_devolucion',
            'r.nombre',
            'c.usuarioNombre',
            'c.usuarioApellidoPat',
            'c.usuarioApellidoMat',
            'e.descripcion'
        )
            ->join('responsable AS r', 'prestamos.capturaUser', '=', 'r.id_responsable')
            ->join('colaborador as c', 'prestamos.idColaboradorEmpleado', '=', 'c.numeroColaborador')
            ->join('estatus as e', 'prestamos.estatus_idEstatus', '=', 'e.idEstatus')
            ->get();


        return view('auth.dashboard', ['prestamos' => $prestamos]);
    }

    public function verify(Request $request)
    {

        $credentials = $request->validate([
            'usuario' => 'required',
            'password' => 'required',
        ]);

        $user = Responsable::where('usuario', $credentials['usuario'])->first();

        // Verificar si se encontró al usuario y si la contraseña coincide

        if (!empty($credentials['password']) && $user && $user->getPlainTextPassword()) {
            if ($credentials['password'] == $user->getPlainTextPassword()) {
                $request->session()->put('nombre_usuario', $user->nombre);
                return redirect()->route('auth.dashboard');
            } else {
                // Las contraseñas no coinciden, manejar el error aquí
                return redirect()->route('auth.login')->withInput();
            }
        } else {

            return redirect()->route('auth.login')->withInput();
        }
    }


    public function CapturaInventario(){
        return view('auth.CapturaInventario');
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
        return view('auth.Licencias');

    }
    public function CrearLicencia(){
        return view('auth.CrearLicencia');
    }
    public function ControlLicencia(){
        return view('auth.ControlLicencia');
    }
    public function Asignados(){
        return view('auth.Asignados');
    }
    public function VistaLicencia(){
        return view('auth.VistaLicencia');
    }
    public function EditarLicencia(){
        return view('auth.EditarLicencia');

    }
    //CONTROL EQUIPOS
    public function ActualizarControl(){
        return view('auth.ActualizarControl');
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
    public function AsignarEquipo(){
        return view('auth.AsignarEquipo');
    }
    public function ActualizarResguardo(){
        return view('auth.ActualizarResguardo');
    }
    public function ActualizarPrestamo(){
        return view('auth.ActualizarPrestamo');
    }
    public function Administrador(){
        return view('auth.Administrador');
    }


}
