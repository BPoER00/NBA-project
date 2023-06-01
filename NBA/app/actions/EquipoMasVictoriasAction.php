<?php

namespace App\actions;

use App\Models\Equipos;

class EquipoMasVictoriasAction
{
    protected $model;

    public function __construct(Equipos $model)
    {
        $this->model = $model;
    }

    public function execute()
    {
        $Este = $this->model::query()
        ->where('id_conferencia', '=', 1)
        ->orderBy('victorias', 'desc')
        ->paginate(8);

        $Oeste = $this->model::query()
        ->where('id_conferencia', '=', 2)
        ->orderBy('victorias', 'desc')
        ->paginate(8);
    
        return array(
            'Este' => $Este,
            'Oeste' => $Oeste
        );
        
    }
}


?>