<?php

namespace App\Http\Controllers;

use App\Imports\EstadisticaJugadoresEquipoImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EstadisticasJugadorEquipoController extends Controller
{
    public function rutaEstadisticasJugadoresEquipo()
    {
        return view("Imports.import-estadisticas-jugador-equipo");
    }

    public function rutaEstadisticasJugadoresEquipoImport(Request $request)
    {
        Excel::import(new EstadisticaJugadoresEquipoImport, $request->file('documento'));
        return view("Imports.import-estadisticas-jugador-equipo");
    }
}
