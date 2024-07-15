<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformeDiarioSeeder extends Seeder
{
    protected $cuentaId;

    public function run()
    {
        DB::table('informe_diario')->insert([
            'id_condicion' => 1,
            'id_alumno' => 1,
            'observaciones' => '',
            'fecha' => now(),
            'id_cuenta' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('informe_diario')->insert([
            'id_condicion' => 2,
            'id_alumno' => 2,
            'observaciones' => '',
            'fecha' => now(),
            'id_cuenta' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
