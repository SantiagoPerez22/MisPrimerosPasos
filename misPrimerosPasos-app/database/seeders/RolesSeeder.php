<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            'nombre' => 'Administrador',
            'descripcion' => 'Tiene acceso total al sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'nombre' => 'Profesor',
            'descripcion' => 'Puede gestionar clases y alumnos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
