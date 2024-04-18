<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipoGeneral;
use App\Models\tipoEquipo;
use App\Models\marca;
use App\Models\modelo;


class flotcontroller extends Controller
{
    public function xd(Request $request) {

        $ShowOrFiltrer = $this ->query();
        $tipoEquipos = tipoEquipo::select('nombreTipoEquipo')->get();
        $tipoMarca = marca::select('nombremarca')->get();
        $tipoModelo = modelo::select('nombremodelo')->get();
        // Construir las condiciones de filtro dinámicamente
        $filters = [
            
            'tipo' => 'nombreTipoEquipo',
            'modelos' => 'nombremodelo',
            'marca' => 'nombremarca',
        ];
        
        foreach ($filters as $key => $column) {
            if ($request->filled($key)) {
                $ShowOrFiltrer->where($column, $request->input($key));
            }
        }
        $ShowOrFiltrer->where('equipogeneral.idEstatus', 2);

        $equipos = $ShowOrFiltrer->get();  
        // Agrupar los datos en un array asociativo
        $datos = [
            'equipos' => $equipos,
            'tipoEquipos' => $tipoEquipos,
            'marcas' => $tipoMarca,
            'modelos' => $tipoModelo,
        ];

        return response()->json($datos);
        
    }

    public function query()
    {
        $query = equipoGeneral::select(
            
            't.nombreTipoEquipo',
            'm.nombremarca',
            'md.nombremodelo',
            'numeroSerie'
        )
        
            ->join('tipoequipo AS t', 'equipogeneral.idTipoEquipo', '=', 't.idTipoEquipo')
            ->join('marca AS m', 'equipogeneral.idMarca', '=', 'm.idMarca')
            ->join('modelo AS md', 'equipogeneral.idModelo', '=', 'md.idModelo')
            ->join('estatus AS e', 'equipogeneral.idEstatus', '=', 'e.idEstatus');
          

        return $query;
    }
}

