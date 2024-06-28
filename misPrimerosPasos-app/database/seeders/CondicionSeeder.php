<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CondicionSeeder extends Seeder
{
    public function run()
    {
        DB::table('condicion')->insert([
            'nombre' => 'Asma',
            'descripcion' => 'Condición de Asma',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('condicion')->insert([
            'nombre' => 'Alergia',
            'descripcion' => 'Condición de Alergia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
