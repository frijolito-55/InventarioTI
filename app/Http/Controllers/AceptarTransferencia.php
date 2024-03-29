<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipoGeneral;
use App\Models\tipoEquipo;
use App\Models\marca;
use App\Models\modelo;
use App\Models\hotel;


class AceptarTransferencia extends Controller
{
    public function AceptarTransferencia (){
        return view('auth.AceptarTransferencia');
    }
    public function DevolverDatos(Request $request){
        $hoteles = hotel::select('nombreHotel')->get();
        $tipoEquipos = tipoEquipo::select('nombreTipoEquipo')->get();
        $marcas = marca::select('nombremarca')->get();
        $modelos = modelo::select('nombremodelo')->get();
        
        $ShowOrFiltrer = $this->query();

        // Construir las condiciones de filtro dinámicamente
        $filters = [
            'buscar' => 'numeroSerie',
            'hotel' => 'h.nombreHotel',
            'destino' => 'hc.nombreHotel',
            'tipo' => 'nombreTipoEquipo',
            'modelos' => 'nombremodelo',
            'marca' => 'nombremarca'
        ];
        
        foreach ($filters as $key => $column) {
            if ($request->filled($key)) {
                $ShowOrFiltrer->where($column, $request->input($key));
            }
        }
        
        $equipos = $ShowOrFiltrer->where('e.descripcion', 'Cambio de Hotel')->get();  
        // Agrupar los datos en un array asociativo
        $datos = [
            'hoteles' => $hoteles,
            'equipos' => $equipos,
            'tipoEquipos' => $tipoEquipos,
            'marcas' => $marcas,
            'modelos' => $modelos
        ];
        // Convertir los datos en JSON y devolverlos como respuesta
        return response()->json($datos);

    }
    public function query()
    {
        $query = equipoGeneral::select(
            'h.nombreHotel',
            'hc.nombreHotel AS destino',
            't.nombreTipoEquipo',
            'm.nombremarca',
            'md.nombremodelo',
            'e.descripcion',
            'numeroSerie'
        )
            ->join('hotel AS h', 'equipogeneral.idHotel', '=', 'h.id')
            ->join('hotel AS hc', 'equipogeneral.idHotelCambio', '=', 'hc.id')
            ->join('tipoequipo AS t', 'equipogeneral.idTipoEquipo', '=', 't.idTipoEquipo')
            ->join('marca AS m', 'equipogeneral.idMarca', '=', 'm.idMarca')
            ->join('modelo AS md', 'equipogeneral.idModelo', '=', 'md.idModelo')
            ->join('estatus AS e', 'equipogeneral.idEstatus', '=', 'e.idEstatus');

        return $query;
    }
    //UPDATE `equipogeneral` SET `idEstatus` = '6', `idHotelCambio` = '18' WHERE `equipogeneral`.`id` = 129;
}
