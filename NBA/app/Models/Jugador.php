<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    const ESTADO_ACTIVO = 1;
    const ESTADO_INACTIVO = 0;

    protected $primaryKey = 'id';

    protected $table = 'jugador';

    protected $cast = [
        'estado' => 'int'
    ];

    protected $fillable = [
        'nombre',
        'estado',
    ];

    public function scopeFiltrarNombreJugador($query, $value)
    {
        return $query->where("nombre", "=", $value)->first();
    }
}
