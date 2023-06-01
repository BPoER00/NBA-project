<?php

namespace App\Imports;

use App\Models\Equipo_Jugador;
use Maatwebsite\Excel\Concerns\ToModel;

class JugadoresEquipoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Equipo_Jugador([
            'id_equipo' => $row[1],
            'id_jugador' => $row[0],
            'asistencias' => $row[2],
            'robos' => $row[3],
            'bloqueos' => $row[4],
            'perdidas' => $row[5],
            'puntos' => $row[6],
            'partidos' => $row[7]
        ]);
    }
}
