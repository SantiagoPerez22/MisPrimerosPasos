<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Persona;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        $persona1 = Persona::find(1);
        $persona2 = Persona::find(2);

        $user1 = User::create([
            'persona_id' => $persona1->id,
            'name' => $persona1->nombre1 . ' ' . $persona1->apellido1,
            'email' => $persona1->email,
            'password' => Hash::make('password123'),
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => 1, // Assuming 'Administrador' role has ID 1
            'model_type' => 'App\\Models\\User',
            'model_id' => $user1->id,
        ]);

        $user2 = User::create([
            'persona_id' => $persona2->id,
            'name' => $persona2->nombre1 . ' ' . $persona2->apellido1,
            'email' => $persona2->email,
            'password' => Hash::make('password123'),
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => 2, // Assuming 'Profesor' role has ID 2
            'model_type' => 'App\\Models\\User',
            'model_id' => $user2->id,
        ]);
    }
}

