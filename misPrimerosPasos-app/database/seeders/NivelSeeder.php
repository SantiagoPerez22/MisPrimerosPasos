<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    public function run()
    {
        DB::table('nivel')->insert([
            'nombre' => 'Sala cuna menor',
            'descripcion' => 'Desde 85 días a 1 año de edad',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nivel')->insert([
            'nombre' => 'Sala cuna mayor',
            'descripcion' => 'Desde 1 año a 2 años de edad',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nivel')->insert([
            'nombre' => 'Nivel medio menor',
            'descripcion' => 'Desde 2 años a 3 años de edad',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
