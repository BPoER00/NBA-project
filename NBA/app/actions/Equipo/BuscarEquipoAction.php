<?php

namespace App\actions\Equipo;

use App\Models\Equipos;

class BuscarEquipoAction
{
    protected $model;

    public function __construct(Equipos $model)
    {
        $this->model = $model;
    }

    public function execute($id)
    {
        $query = $this->model::query()
                                ->where('id', '=', $id)
                                ->first();

        return $query;
    }
}



?>