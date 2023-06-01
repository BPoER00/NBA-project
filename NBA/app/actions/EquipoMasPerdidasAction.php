<?php

namespace App\actions;

use App\actions\Equipo\BuscarEquipoAction;
use App\Models\Equipos;

class EquipoMasPerdidasAction
{
    protected $model;
    protected $buscarEquipoAction;

    public function __construct(Equipos $model, BuscarEquipoAction $buscarEquipoAction)
    {
        $this->model = $model;
        $this->buscarEquipoAction = $buscarEquipoAction;
    }

    public function execute()
    {
        $query = $this->model::query()->paginate(30);
        
        $punteo = array();
        $suma = 0;
        $contador = 0;
        foreach($query as $item)
        {
            $punteo[$contador]['nombre'] = $item->nombre;
            $equipo_jugador = $item->equipo_jugador;
            foreach($equipo_jugador as $item2)
            {
                $estadisticas_equipo_jugador = $item2->estadisticas_equipo_jugador;
                $suma += $estadisticas_equipo_jugador->sum('perdidas');
                $punteo[$contador]['perdidas'] = $suma;
            }
            
            $contador++;
            $suma = 0;
        }

        $orden = 0;
        $ordenado = array();
        for($i = 0; $i < 30; $i++)
        {
            for($o = 0; $o < 30; $o++)
            {
                if($punteo[$i]['perdidas'] < $punteo[$o]['perdidas'])
                {
                    $orden++;
                }
            }
            $ordenado[$orden]['nombre'] = $punteo[$i]['nombre'];
            $ordenado[$orden]['perdidas'] = $punteo[$i]['perdidas'];

            $orden = 0;
        }
        

        // dd($datos);
        return $ordenado;
    }
}


?>