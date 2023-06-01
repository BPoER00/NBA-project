<?php

namespace App\actions;

use App\Models\Equipos;

class MasTitulosAction
{

    protected $model;

    public function __construct(Equipos $model)
    {
        $this->model = $model;
    } 

    public function execute()
    {
        $query = $this->model::query();

        $data = $query->orderBy('titulos', 'desc');

        return $data->paginate(15);
    }

}


?>