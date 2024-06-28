<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NucleoSeeder extends Seeder
{
    public function run()
    {
        DB::table('nucleo')->insert([
            'nombre' => 'Ciencias',
            'descripcion' => 'Nucleo de Ciencias',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nucleo')->insert([
            'nombre' => 'Humanidades',
            'descripcion' => 'Nucleo de Humanidades',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}