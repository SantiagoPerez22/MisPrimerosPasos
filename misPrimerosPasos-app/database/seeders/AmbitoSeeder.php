<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmbitoSeeder extends Seeder
{
    public function run()
    {
        DB::table('ambito')->insert([
            'nombre' => 'Desarrollo Personal y Social',
            'descripcion' => 'Es como el sujeto se desarrolla de forma social en su entorno',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ambito')->insert([
            'nombre' => 'Comunicación Integral',
            'descripcion' => 'Es como el sujeto desarrolla distintos tipos de comunicación',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ambito')->insert([
            'nombre' => 'Interacción y Comprensión del Entorno',
            'descripcion' => 'Comprensión del sujeto con su entorno y desarrollo de pensamiento lógico',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
