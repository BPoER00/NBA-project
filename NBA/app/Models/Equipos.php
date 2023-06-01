<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    const ESTADO_ACTIVO = 1;
    const ESTADO_INACTIVO = 0;

    protected $primaryKey = 'id';

    protected $table = 'equipos';

    protected $cast = [
        'estado' => 'int'
    ];

    protected $fillable = [
        'nombre',
        'siglas',
        'cancha',
        'titulos',
        'victorias',
        'derrotas',
        'id_conferencia',
        'estado',
    ];

    public function scopeFiltrarNombreEquipo($query, $value)
    {
        return $query->where("nombre", "=", $value)->first();
    }

    public function scopeFiltrarSiglasEquipo($query, $value)
    {
        return $query->where("siglas", "=", $value)->first();
    }

    public function scopeFiltrarTitulos($query, $value)
    {
        return $query->where("titulos", "=", $value);
    }

    public function scopeFiltrarCoincidenciaCancha($query, $value)
    {
        return $query->where("cancha", "LIKE", "%". $value ."%");
    }

	public function equipo_jugador()
	{
		return $this->hasMany(Equipo_Jugador::class, 'id_equipo');
	}
}
