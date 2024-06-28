<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObservacionesSeeder extends Seeder
{
    public function run()
    {
        DB::table('observaciones')->insert([
            'id_alumno' => 1,
            'id_clase' => 1,
            'observaciones' => 'Buena participación',
            'fecha' => '2023-04-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('observaciones')->insert([
            'id_alumno' => 2,
            'id_clase' => 2,
            'observaciones' => 'Falta de atención',
            'fecha' => '2023-04-02',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}