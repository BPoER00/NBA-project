<?php

namespace App\Imports;

use App\Models\Estadisticas_Jugadores;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class EstadisticaJugadoresEquipoImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Estadisticas_Jugadores([
            
            'id_jugadorE' => $row[0],
            'id_localia' => $row[1],
            'id_equipoC' => $row[2],
            'resultado' => $row[3],
            'fg' => $row[4],
            'fga' => $row[5],
            'p3' => $row[6],
            'pa3' => $row[7],
            'ft' => $row[8],
            'fta' => $row[9],
            'asistencias' => $row[10],
            'robos' => $row[11],
            'bloqueos' => $row[12],
            'perdidas' => $row[13],
            'puntos' => $row[14],
            'fecha' => $row[15]

        ]);
    }
}
