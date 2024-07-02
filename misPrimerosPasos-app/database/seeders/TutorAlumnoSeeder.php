<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorAlumnoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tutor_alumno')->insert([
            'id_alumno' => 4,
            'id_tutor1' => 1,
            'id_tutor2' => 2,
            'fecha_matricula' => '2023-01-15',
            'id_nivel' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tutor_alumno')->insert([
            'id_alumno' => 3,
            'id_tutor1' => 1,
            'id_tutor2' => 2,
            'fecha_matricula' => '2023-02-20',
            'id_nivel' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
