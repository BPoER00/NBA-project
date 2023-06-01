<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conferencia;
use App\Models\Conferencias;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

class ConferenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conferencia = array(
            [
                'nombre' => 'Este'
            ],
            [
                'nombre' => 'Oeste'
            ]
        );

        Schema::disableForeignKeyConstraints();

        try
        {
            for($i = 0; $i < count($conferencia); $i++)
            {
                $equipo = Conferencias::create([
                    'nombre' => $conferencia[$i]['nombre'],
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
