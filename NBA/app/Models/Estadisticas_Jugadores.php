<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estadisticas_Jugadores extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'estadisticas__jugadores';

    protected $cast = [
        'id_jugadorE' => 'int',
        'id_localia' => 'int',
        'id_equipoC' => 'int',
    ];

    protected $fillable = [
        'id_jugadorE',
        'id_localia',
        'id_equipoC',
        'resultado',
        'fg',
        'fga',
        'p3',
        'pa3',
        'ft',
        'fta',
        'asistencias',
        'robos',
        'bloqueos',
        'perdidas',
        'puntos',
        'fecha'
    ];

    public function jugador_equipo()
	{
		return $this->belongsTo(Equipo_Jugador::class, 'id_jugadorE');
	}

    public function localia()
	{
		return $this->belongsTo(Localia::class, 'id_localia');
	}

    public function equipo()
	{
		return $this->belongsTo(Equipos::class, 'id_equipoC');
	}

    public function scopeFiltrarEquipoPuntos($query)
    {
        return $query->whereHas('jugador_equipo', function($q){
            return $q->filtrarGroupEquipo();
        });
    }

    public function scopeCoso($query)
    {
        dd($query->sum('puntos'));
    }

}
