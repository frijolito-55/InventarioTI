<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;
use App\Models\Resguardo;
use App\Models\equipoGeneral;

class ResponsivaController extends Controller
{
    public function Responsiva(Request $request){

        $nombreUsuario = $request->session()->get('nombre_usuario');
        $consulta = $this->query($request);
        $resguardo = $this->queryRes($request);

        // Ejecuta la consulta y obtén los resultados
        $resguardos = $consulta->get();
        $resguardosTabla = $resguardo->get();

        $datos = [
            'nombreUsuario'=>$nombreUsuario,
           'resguardos' => $resguardos,
           'resguardosTabla' => $resguardosTabla
       ];
       //return $datos;
    return view('auth.Responsiva', ['datos' => $datos]);
    }
    public function query(Request $request){
        
        $idEquipo = $request->query('id');

        $query = Resguardo::select(
            'resguardo.id_resguardo',
            'resguardo.comentarios',
            'resguardo.idColaboradorEmpleado',
            'resguardo.capturauser',
            'resguardo.nombreEquipo',
            'd.nombredepartamento',
            Resguardo::raw("CONCAT(c.usuarioNombre, ' ', c.usuarioApellidoPat, ' ', c.usuarioApellidoMat) AS nombreCompleto")
        )
            ->join('colaborador as c', 'resguardo.idColaboradorEmpleado', '=', 'c.id_usuario')
            ->join('departamento as d', 'c.departamento_iddepartamento', '=', 'd.iddepartamento')
            ->where('resguardo.id_resguardo', $idEquipo);
          
        return $query;
    }
    public function queryRes(Request $request){
        $idEquipoRes = $request->query('id');
        $query = equipoGeneral::select(
            'h.nombreHotel',
            't.nombreTipoEquipo',
            'm.nombremarca',
            'md.nombremodelo',
            'e.descripcion',
            'numeroSerie',
            
        )
            ->join('hotel AS h', 'equipogeneral.idHotel', '=', 'h.id')
            ->join('tipoequipo AS t', 'equipogeneral.idTipoEquipo', '=', 't.idTipoEquipo')
            ->join('marca AS m', 'equipogeneral.idMarca', '=', 'm.idMarca')
            ->join('modelo AS md', 'equipogeneral.idModelo', '=', 'md.idModelo')
            ->join('estatus AS e', 'equipogeneral.idEstatus', '=', 'e.idEstatus')
            ->where('resguardo_idresguardo', $idEquipoRes);

        return $query;
    }
    
}
