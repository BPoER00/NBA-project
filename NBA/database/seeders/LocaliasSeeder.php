<?php

namespace Database\Seeders;

use App\Models\Localia;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

class LocaliasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localias = array(
            [
                'nombre' => 'Local',
                'sigla' => 'L'
            ],
            [
                'nombre' => 'Visitante',
                'sigla' => 'V'
            ]
        );

        Schema::disableForeignKeyConstraints();

        try
        {
            for($i = 0; $i < count($localias); $i++)
            {
                $localia = Localia::create([
                    'nombre' => $localias[$i]['nombre'],
                    'sigla' => $localias[$i]['sigla'],
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
