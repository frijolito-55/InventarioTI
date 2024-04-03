<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;
use App\Models\Departamento;
use App\Models\Resguardo;
use App\Models\Gerencia;
use App\Models\hotel;
use Termwind\Components\Raw;

class ResguardoController extends Controller
{
    public function Resguardo(){
        return view('auth.Resguardo');
    }
    public function VistaResguardo(){
        return view('auth.VistaResguardo');  
    }
    
    public function mostrarDatosResguardo(Request $request){
        $query = $this->query();
        $hoteles = hotel::select('nombreHotel')->get();
        $departamentos = Departamento::select('nombredepartamento')->get();
        
        $filters = [
            'depa' => 'nombredepartamento',
            'hotel' => 'nombreHotel'
        ];
        
        foreach ($filters as $key => $column) {
            if ($request->filled($key)) {
                $query->where($column, $request->input($key));
            }
        }
        
        $equipos = $query->get();  
        // Agrupar los datos en un array asociativo
        $datos = [
            'hoteles' => $hoteles,
            'equipos' => $equipos,
            'departamentos' => $departamentos
        ];
        // Convertir los datos en JSON y devolverlos como respuesta
        return response()->json($datos);
    }

    public function query()
    {
        $query = Resguardo::select(
            'resguardo.id_resguardo',
            'resguardo.nombreEquipo',
            'h.nombreHotel',
            'd.nombredepartamento',
            Resguardo::raw("CONCAT(c.usuarioNombre, ' ', c.usuarioApellidoPat, ' ', c.usuarioApellidoMat) AS nombreCompleto")
        )
            ->join('colaborador as c', 'resguardo.idColaboradorEmpleado', '=', 'c.id_usuario')
            ->join('hotel as h', 'c.hotel_id', '=', 'h.id')
            ->join('departamento as d', 'c.departamento_iddepartamento', '=', 'd.iddepartamento');
          
        return $query;
   }
}


