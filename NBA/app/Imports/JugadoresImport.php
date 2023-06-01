<?php

namespace App\Imports;

use App\Models\Jugador;
use Maatwebsite\Excel\Concerns\ToModel;

class JugadoresImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jugador([
            'nombre' => $row[0]
        ]);
    }
}
