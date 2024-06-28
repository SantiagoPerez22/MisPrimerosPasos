<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlergiaSeeder extends Seeder
{
    public function run()
    {
        DB::table('alergia')->insert([
            'nombre' => 'Polen',
            'descripcion' => 'Alergia al polen',
            'id_alumno' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergia')->insert([
            'nombre' => 'Polvo',
            'descripcion' => 'Alergia al polvo',
            'id_alumno' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}