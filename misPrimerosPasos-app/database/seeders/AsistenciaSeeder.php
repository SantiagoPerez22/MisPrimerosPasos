<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsistenciaSeeder extends Seeder
{
    public function run()
    {
        DB::table('asistencia')->insert([
            'id_alumno' => 1,
            'id_cuenta' => 1,
            'id_clase' => 1,
            'asistencia' => 'Sí',
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('asistencia')->insert([
            'id_alumno' => 2,
            'id_cuenta' => 1,
            'id_clase' => 2,
            'asistencia' => 'No',
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
