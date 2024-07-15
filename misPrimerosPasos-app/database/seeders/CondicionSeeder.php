<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CondicionSeeder extends Seeder
{
    public function run()
    {
        DB::table('condicion')->insert([
            'nombre' => 'Observación estado de salud',
            'descripcion' => 'Presenta moretones en brazos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('condicion')->insert([
            'nombre' => 'Observación estado psicológico',
            'descripcion' => 'Se presenta en estado catatónico',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('condicion')->insert([
            'nombre' => 'Observación presentación personal',
            'descripcion' => 'Se presenta con su ropa en mal estado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
