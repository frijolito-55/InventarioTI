<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\equipoGeneral;
use App\Models\hotel;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    //
    //ESTE ES PRESTAMO DE EQUIPOS
    public function Prestamo()
    {
        return view('auth.Prestamo');
    }
    public function PrestamoTable(Request $request){
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
        $datos = [
            'hoteles' => $hoteles,
            'equipos' => $equipos,
            'departamentos' => $departamentos
        ];

        return response()->json($datos);

    }

    public function query()
    {

        $subquery = equipoGeneral::selectRaw('count(*)')
        ->whereColumn('equipogeneral.idPrestamo', 'prestamos.id')->toSql();

        $query = Prestamo::select(
            'prestamos.id',
            'fecha_prestamo',
            'fecha_devolucion',
            'c.departamento_iddepartamento',
            'd.nombredepartamento',
            'e.descripcion',
            'h.nombreHotel',
            
            
            Prestamo::raw("CONCAT(c.usuarioNombre, ' ', c.usuarioApellidoPat, ' ', c.usuarioApellidoMat) AS nombreCompleto"),
            Prestamo::raw("($subquery) as equiposAsignados")
        )
            ->join('colaborador as c', 'prestamos.idColaboradorEmpleado', '=', 'c.numeroColaborador')
            ->join('hotel as h', 'c.hotel_id', '=', 'h.id')
            ->join('departamento as d','c.departamento_iddepartamento', '=', 'iddepartamento')
            ->join('estatus as e', 'prestamos.estatus_idEstatus', '=', 'e.idEstatus');

        return $query;
    }
}
