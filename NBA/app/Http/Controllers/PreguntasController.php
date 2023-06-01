<?php

namespace App\Http\Controllers;

use App\actions\EquipoMasAsistenciasAction;
use App\actions\EquipoMasLibresAction;
use App\actions\EquipoMasPerdidasAction;
use App\actions\EquipoMasPuntosAction;
use App\actions\EquipoMasRobosAction;
use App\actions\EquipoMasTapasAction;
use App\actions\EquipoMasTriplesAction;
use App\actions\EquipoMasVictoriasAction;
use App\actions\EquiposPlayoffsAction;
use App\actions\MasTitulosAction;
use App\Models\User;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    public function equipoMasTitulos(Request $request, MasTitulosAction $action)
    {
        $actionReturn = $action->execute();

        return view('Questions.equipoMasTitulos')
                    ->with('equipos', $actionReturn);
    }

    public function equipoMasPuntos(Request $request, EquipoMasPuntosAction $action)
    {
        $paginado = 8;
        $actionResult = $action->execute($paginado);

        return view('Questions.equipoMasPuntos')
                    ->with('puntos', $actionResult)
                    ->with('equipos', $paginado);
    }

    public function equiposPlayoffs(Request $request, EquiposPlayoffsAction $action)
    {
        $actionResult =  $action->execute();

        return view('Questions.equipoPlayoffs')
                    ->with('victorias', $actionResult);
    }

    public function equipovictorias(Request $request, EquipoMasVictoriasAction $action)
    {
        $actionResult = $action->execute();
        
        return view('Questions.equipoMasVictorias')
                ->with('victorias', $actionResult);
    }

    public function equipoMasTriples(Request $request, EquipoMasTriplesAction $action)
    {
        $paginado = 8;
        $actionResult = $action->execute();

        return view('Questions.equipoMasTriples')
        ->with('puntos', $actionResult)
        ->with('equipos', $paginado);
    }

    public function equipoMasLibres(Request $request, EquipoMasLibresAction $action)
    {
        $paginado = 8;
        $actionResult = $action->execute();

        return view('Questions.equipoMasLibres')
        ->with('puntos', $actionResult)
        ->with('equipos', $paginado);
    }

    public function equipoMasAsistencias(Request $request, EquipoMasAsistenciasAction $action)
    {
        $paginado = 8;
        $actionResult = $action->execute();

        return view('Questions.equipoMasAsistencias')
        ->with('puntos', $actionResult)
        ->with('equipos', $paginado);
    }

    public function equipoMasPerdidas(Request $request, EquipoMasPerdidasAction $action)
    {
        $paginado = 8;
        $actionResult = $action->execute();

        return view('Questions.equipoMasPerdidas')
        ->with('puntos', $actionResult)
        ->with('equipos', $paginado);
    }

    public function equipoMasRobos(Request $request, EquipoMasRobosAction $action)
    {
        $paginado = 8;
        $actionResult = $action->execute();

        return view('Questions.equipoMasRobos')
        ->with('puntos', $actionResult)
        ->with('equipos', $paginado);
    }

    public function equipoMasTapas(Request $request, EquipoMasTapasAction $action)
    {
        $paginado = 8;
        $actionResult = $action->execute();

        return view('Questions.equipoMasTapas')
        ->with('puntos', $actionResult)
        ->with('equipos', $paginado);
    }
}
