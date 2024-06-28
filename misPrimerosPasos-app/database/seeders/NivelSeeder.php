<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    public function run()
    {
        DB::table('nivel')->insert([
            'nombre' => 'Primero',
            'descripcion' => 'Nivel 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nivel')->insert([
            'nombre' => 'Segundo',
            'descripcion' => 'Nivel 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
