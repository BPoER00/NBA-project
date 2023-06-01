<?php

namespace App\actions;

use App\actions\Equipo\BuscarEquipoAction;
use App\Models\Equipos;

class EquipoMasLibresAction
{
    protected $model;

    public function __construct(Equipos $model)
    {
        $this->model = $model;
    }

    public function execute()
    {
        $query = $this->model::query()->paginate(30);

        $punteo = array();
        $ft = 0;
        $fta = 0;
        $contador = 0;
        foreach($query as $item)
        {
            $punteo[$contador]['nombre'] = $item->nombre;
            $equipo_jugador = $item->equipo_jugador;
            foreach($equipo_jugador as $item2)
            {
                $estadisticas_equipo_jugador = $item2->estadisticas_equipo_jugador;
                $ft += $estadisticas_equipo_jugador->sum('ft');
                $fta += $estadisticas_equipo_jugador->sum('fta');
                $punteo[$contador]['ft'] = $ft;
                $punteo[$contador]['fta'] = $fta;

            }

            $contador++;
            $ft = $fta = 0;
        }

        $orden = 0;
        $ordenado = array();
        for($i = 0; $i < 30; $i++)
        {
            for($o = 0; $o < 30; $o++)
            {
                if($punteo[$i]['ft'] < $punteo[$o]['ft'])
                {
                    $orden++;
                }
            }

            $ordenado[$orden]['nombre'] = $punteo[$i]['nombre'];
            $ordenado[$orden]['ft'] = $punteo[$i]['ft'];
            $ordenado[$orden]['fta'] = $punteo[$i]['fta']; 
            

            $orden = 0;
        }

        

        // dd($datos);
        return $ordenado;
    }
}


?>