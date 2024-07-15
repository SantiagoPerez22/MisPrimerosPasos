<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('clase')->insert([
            'id_ambito' => 1,
            'id_nucleo' => 1,
            'id_nivel' => 1,
            'id_profesor' => 2,
            'id_asistente1' => null,
            'id_asistente2' => null,
            'id_sala' => 1,
            'objetivo' => 'Objetivo de la clase 1',
            'observaciones' => 'Observacion de la clase 1',
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('clase')->insert([
            'id_ambito' => 2,
            'id_nucleo' => 2,
            'id_nivel' => 2,
            'id_profesor' => 2,
            'id_asistente1' => null,
            'id_asistente2' => null,
            'id_sala' => 2,
            'objetivo' => 'Objetivo de la clase 2',
            'observaciones' => 'Observacion de la clase 2',
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
