<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnfermedadesSeeder extends Seeder
{
    public function run()
    {
        DB::table('enfermedades')->insert([
            'nombre' => 'Diabetes',
            'descripcion' => 'Diabetes tipo 1',
            'id_alumno' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('enfermedades')->insert([
            'nombre' => 'Epilepsia',
            'descripcion' => 'Epilepsia recurrente',
            'id_alumno' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}