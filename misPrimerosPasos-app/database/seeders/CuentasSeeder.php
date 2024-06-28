<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuentasSeeder extends Seeder
{
    public function run()
    {
        DB::table('cuentas')->insert([
            'id_persona' => 1,
            'email' => 'juan.perez@example.com',
            'password' => bcrypt('password123'),
            'rol_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cuentas')->insert([
            'id_persona' => 2,
            'email' => 'maria.lopez@example.com',
            'password' => bcrypt('password123'),
            'rol_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
