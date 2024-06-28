<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorAlumnoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tutor_alumno')->insert([
            'id_alumno' => 1,
            'id_tutor1' => 2,
            'id_tutor2' => null,
            'fecha_matricula' => '2023-01-15',
            'id_nivel' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tutor_alumno')->insert([
            'id_alumno' => 2,
            'id_tutor1' => 1,
            'id_tutor2' => null,
            'fecha_matricula' => '2023-02-20',
            'id_nivel' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
