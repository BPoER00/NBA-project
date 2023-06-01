<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipo_Jugador extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'equipo__jugadors';

    protected $cast = [
        'id_equipo' => 'int',
        'id_jugador' => 'int'
    ];

    protected $fillable = [
        'id_equipo',
        'id_jugador',
        'asistencias',
        'robos',
        'bloqueos',
        'perdidas',
        'puntos',
        'partidos',
    ];

    public function equipo()
	{
		return $this->belongsTo(Equipos::class, 'id_equipo');
	}

    public function jugador()
	{
		return $this->belongsTo(Jugador::class, 'id_jugador');
	}

    public function scopeFiltrarGroupEquipo($query)
    {
        dd('hoasdfjfadsj');
        return $query->groupBy('id_equipo');
    }

    public function estadisticas_equipo_jugador()
    {
        return $this->hasMany(Estadisticas_Jugadores::class, 'id_jugadorE');
    }
}
