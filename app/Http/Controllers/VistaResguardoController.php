<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resguardo;
use App\Models\equipoGeneral;

class VistaResguardoController extends Controller
{
    public function VistaResguardo(Request $request){ 
         // Llama al método query y pasa el Request
         $consulta = $this->query($request);
         $resguardo = $this->queryRes($request);
 
         // Ejecuta la consulta y obtén los resultados
         $resguardos = $consulta->get();
         $resguardosTabla = $resguardo->get();

         $datos = [
            'resguardos' => $resguardos,
            'resguardosTabla' => $resguardosTabla
        ];
         // Puedes devolver los resultados a la vista o hacer lo que necesites con ellos
         return view('auth.VistaResguardo', ['datos' => $datos]);
        //return $datos['resguardosTabla'];
    }

    public function query(Request $request){
        
        $idEquipo = $request->query('id');

        $query = Resguardo::select(
            'resguardo.id_resguardo',
            'resguardo.comentarios',
            'resguardo.capturauser',
            'resguardo.nombreEquipo',
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
            'numeroSerie'
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
