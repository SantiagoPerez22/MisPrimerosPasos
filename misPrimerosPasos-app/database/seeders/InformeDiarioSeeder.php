<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformeDiarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('informe_diario')->insert([
            'id_condicion' => 1,
            'id_alumno' => 1,
            'fecha' => '2023-03-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('informe_diario')->insert([
            'id_condicion' => 2,
            'id_alumno' => 2,
            'fecha' => '2023-03-02',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}