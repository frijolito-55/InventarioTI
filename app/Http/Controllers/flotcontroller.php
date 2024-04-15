<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipoGeneral;


class flotcontroller extends Controller
{
    public function xd() {

        $query = $this ->query();
        $mostrar = $query ->get();

        return response()->json($mostrar);
        
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
            ->join('estatus AS e', 'equipogeneral.idEstatus', '=', 'e.idEstatus') 
            ->where('equipogeneral.idEstatus', 2);

        return $query;
    }
}

