<?php

namespace App\Http\Controllers;

use App\Models\equipoGeneral;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class ResponsivaPresController extends Controller
{
    //
    public function ResponsivaPrestamo(Request $request){
        $nombreUsuario = $request->session()->get('nombre_usuario');
        $consulta = $this->query($request);
        $resguardo = $this->queryRes($request);

        // Ejecuta la consulta y obtén los resultados
        $resguardos = $consulta->get();
        $resguardosTabla = $resguardo->get();

        $datos = [
            'nombreUsuario' => $nombreUsuario,
           'resguardos' => $resguardos,
           'resguardosTabla' => $resguardosTabla
       ];
       //return response()->json($datos);

    return view('auth.ResponsivaPrestamo', ['datos' => $datos]);
    }
    public function query(Request $request){
        
        $id= $request->query('id');
        $query = Prestamo::select(
            'prestamos.id',
            'prestamos.idColaboradorEmpleado',
            'prestamos.proroga',
            'fecha_prestamo',
            'fecha_devolucion',
            'd.nombredepartamento',
            'prestamos.descripcion',
            'h.nombreHotel',
            
            Prestamo::raw("CONCAT(c.usuarioNombre, ' ', c.usuarioApellidoPat, ' ', c.usuarioApellidoMat) AS nombreCompleto"),
        )
            ->join('colaborador as c', 'prestamos.idColaboradorEmpleado', '=', 'c.numeroColaborador')
            ->join('hotel as h', 'c.hotel_id', '=', 'h.id')
            ->join('departamento as d','c.departamento_iddepartamento', '=', 'iddepartamento')
            ->join('estatus as e', 'prestamos.estatus_idEstatus', '=', 'e.idEstatus')
            ->where('prestamos.id', $id);

        return $query;
    }
    public function queryRes(Request $request){
        $idEquipoRes = $request->query('id');
        $query = equipoGeneral::select(
            'equipoGeneral.id',
            'numeroSerie',
            't.nombreTipoEquipo',
            'm.nombremarca',
            'md.nombreModelo',
            
        )
        ->join('tipoequipo AS t', 'equipoGeneral.idTipoEquipo', '=', 't.idTipoEquipo')
        ->join('prestamos AS p', 'equipoGeneral.idPrestamo', '=', 'p.id')
        ->join('marca AS m', 'equipoGeneral.idMarca', '=', 'm.idMarca')
        ->join('modelo AS md', 'equipoGeneral.idModelo', '=', 'md.idModelo')
        ->join('colaborador as c', 'p.idColaboradorEmpleado', '=', 'c.numeroColaborador')
        ->where('idPrestamo', $idEquipoRes);
        return $query;
    }
}
