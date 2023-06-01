<?php

namespace App\Http\Controllers;

use App\Imports\JugadoresEquipoImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Expr\Cast\String_;

class JugadorEquipoController extends Controller
{
    public function rutaJugadoresEquipo()
    {
        return view("Imports.import-jugadores-equipo");
    }

    public function rutaJugadoresEquipoImport(Request $request)
    {
        Excel::import(new JugadoresEquipoImport, $request->file('documento'));
        return view("Imports.import-jugadores-equipo");
    }
}
