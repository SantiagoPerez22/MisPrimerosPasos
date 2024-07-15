<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformeSemanalSeeder extends Seeder
{
    public function run()
    {
        DB::table('informe_semanal')->insert([
            'id_alumno' => 1,
            'id_cuenta' => 1,
            'altura' => 1.75,
            'peso' => 70.5,
            'fecha' => '2023-03-05',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('informe_semanal')->insert([
            'id_alumno' => 2,
            'id_cuenta' => 1,
            'altura' => 1.60,
            'peso' => 55.3,
            'fecha' => '2023-03-12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
