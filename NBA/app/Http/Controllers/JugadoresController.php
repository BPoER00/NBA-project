<?php

namespace App\Http\Controllers;

use App\Imports\JugadoresImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class JugadoresController extends Controller
{

    public function rutaJugadores()
    {
        return view("Imports.Import-jugadores")
        ->with("guardados", false);
    }

    public function importJugadores(Request $request)
    {
        Excel::import(new JugadoresImport, $request->file('documento'));
        return view("Imports.Import-jugadores")
        ->with("guardados", true);
    }
}
