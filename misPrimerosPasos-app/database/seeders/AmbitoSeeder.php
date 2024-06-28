<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmbitoSeeder extends Seeder
{
    public function run()
    {
        DB::table('ambito')->insert([
            'nombre' => 'Matemáticas',
            'descripcion' => 'Ambito de Matemáticas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ambito')->insert([
            'nombre' => 'Lenguaje',
            'descripcion' => 'Ambito de Lenguaje',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
