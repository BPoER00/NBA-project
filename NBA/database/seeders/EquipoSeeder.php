<?php

namespace Database\Seeders;

use App\Models\Equipos;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipos = array(
            //Conferencia Este
            [
                'nombre' => 'Boston Celtics',
                'siglas' => 'BOS',
                'cancha' => 'TD Garden',
                'titulos' => '17',
                'victorias' => '55',
                'derrotas' => '27',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Milwaukee Bucks',
                'siglas' => 'MIL',
                'cancha' => 'Fiserv Forum',
                'titulos' => '1',
                'victorias' => '44',
                'derrotas' => '38',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Philadelphia 76ers',
                'siglas' => 'PHI',
                'cancha' => 'Wells Fargo Center',
                'titulos' => '3',
                'victorias' => '52',
                'derrotas' => '30',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'New York Knicks',
                'siglas' => 'NYK',
                'cancha' => 'Madison Square Garden',
                'titulos' => '2',
                'victorias' => '29',
                'derrotas' => '53',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Chicago Bulls',
                'siglas' => 'CHI',
                'cancha' => 'United Center',
                'titulos' => '6',
                'victorias' => '27',
                'derrotas' => '55',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Miami Heat',
                'siglas' => 'MIA',
                'cancha' => 'Kaseya Center',
                'titulos' => '3',
                'victorias' => '44',
                'derrotas' => '38',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Brooklyn Nets',
                'siglas' => 'BRK',
                'cancha' => 'Barclays Center',
                'titulos' => '0',
                'victorias' => '28',
                'derrotas' => '54',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Toronto Raptors',
                'siglas' => 'TOR',
                'cancha' => 'Air Canada Center',
                'titulos' => '0',
                'victorias' => '59',
                'derrotas' => '23',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Cleveland Cavaliers',
                'siglas' => 'CLE',
                'cancha' => 'Rocket Mortgage FieldHouse',
                'titulos' => '1',
                'victorias' => '50',
                'derrotas' => '32',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Atlanta Hawks',
                'siglas' => 'ATL',
                'cancha' => 'State Farm Arena',
                'titulos' => '1',
                'victorias' => '24',
                'derrotas' => '58',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Charlotte Hornets',
                'siglas' => 'CHO',
                'cancha' => 'Spectrum Center',
                'titulos' => '0',
                'victorias' => '36',
                'derrotas' => '46',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Washington Wizards',
                'siglas' => 'WAS',
                'cancha' => 'Capital One Arena',
                'titulos' => '1',
                'victorias' => '43',
                'derrotas' => '39',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Indiana Pacers',
                'siglas' => 'IND',
                'cancha' => 'Bankers Life Fieldhouse',
                'titulos' => '0',
                'victorias' => '48',
                'derrotas' => '34',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Orlando Magic',
                'siglas' => 'ORL',
                'cancha' => 'Amway Center',
                'titulos' => '0',
                'victorias' => '25',
                'derrotas' => '57',
                'id_conferencia' => 1
            ],
            [
                'nombre' => 'Detroit Pistons',
                'siglas' => 'DET',
                'cancha' => 'Little Caesars Arena',
                'titulos' => '3',
                'victorias' => '39',
                'derrotas' => '43',
                'id_conferencia' => 1
            ],

            //Conferencia Oeste
            [
                'nombre' => 'Los Angeles Lakers',
                'siglas' => 'LAL',
                'cancha' => 'Crypton.com Arena',
                'titulos' => '16',
                'victorias' => '35',
                'derrotas' => '47',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Golden State Warriors',
                'siglas' => 'GSW',
                'cancha' => 'Chase Center',
                'titulos' => '4',
                'victorias' => '58',
                'derrotas' => '24',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Dallas Mavericks',
                'siglas' => 'DAL',
                'cancha' => 'American Airlines Center',
                'titulos' => '1',
                'victorias' => '24',
                'derrotas' => '58',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Los Angeles Clippers',
                'siglas' => 'LAC',
                'cancha' => 'Crypto.com Arena',
                'titulos' => '0',
                'victorias' => '42',
                'derrotas' => '40',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Phoenix Suns',
                'siglas' => 'PHO',
                'cancha' => 'Footprint Center',
                'titulos' => '0',
                'victorias' => '21',
                'derrotas' => '61',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'New Orleans Pelicans',
                'siglas' => 'NOP',
                'cancha' => 'Smoothie King Center',
                'titulos' => '0',
                'victorias' => '48',
                'derrotas' => '34',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Sacramento Kings',
                'siglas' => 'SAC',
                'cancha' => 'Golden 1 Center',
                'titulos' => '1',
                'victorias' => '27',
                'derrotas' => '55',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Denver Nuggets',
                'siglas' => 'DEN',
                'cancha' => 'Pepsi Center',
                'titulos' => '0',
                'victorias' => '46',
                'derrotas' => '36',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Oklahoma City Thunder',
                'siglas' => 'OKC',
                'cancha' => 'Paycom Center',
                'titulos' => '1',
                'victorias' => '48',
                'derrotas' => '34',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Memphis Grizzlies',
                'siglas' => 'MEM',
                'cancha' => 'FedExForum',
                'titulos' => '0',
                'victorias' => '22',
                'derrotas' => '60',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Minnesota Timberwolves',
                'siglas' => 'MIN',
                'cancha' => 'Target Center',
                'titulos' => '0',
                'victorias' => '47',
                'derrotas' => '35',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Utah Jazz',
                'siglas' => 'UTA',
                'cancha' => 'Vivint Smart Home Arena',
                'titulos' => '0',
                'victorias' => '48',
                'derrotas' => '34',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Portlan Trail Blazers',
                'siglas' => 'POR',
                'cancha' => 'Moda Center',
                'titulos' => '1',
                'victorias' => '49',
                'derrotas' => '33',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'San Antonio Spurs',
                'siglas' => 'SAS',
                'cancha' => 'AT&T Center',
                'titulos' => '5',
                'victorias' => '47',
                'derrotas' => '35',
                'id_conferencia' => 2
            ],
            [
                'nombre' => 'Houston Rockets',
                'siglas' => 'HOU',
                'cancha' => 'Toyota Center',
                'titulos' => '2',
                'victorias' => '65',
                'derrotas' => '17',
                'id_conferencia' => 2
            ],
        );
    
        Schema::disableForeignKeyConstraints();

        try
        {
            for($i = 0; $i < count($equipos); $i++)
            {
                $equipo = Equipos::create([
                    'nombre' => $equipos[$i]['nombre'],
                    'siglas' => $equipos[$i]['siglas'],
                    'cancha' => $equipos[$i]['cancha'],
                    'titulos' => $equipos[$i]['titulos'],
                    'victorias' => $equipos[$i]['victorias'],
                    'derrotas' => $equipos[$i]['derrotas'],
                    'id_conferencia' => $equipos[$i]['id_conferencia'],
                    'estado' => Equipos::ESTADO_ACTIVO,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

            DB::commit();
        }
        catch(Exception|Throwable $e)
        {
            DB::rollBack();
            $this->command->warn($e->getMessage());
        }

        Schema::enableForeignKeyConstraints();
    }
}
