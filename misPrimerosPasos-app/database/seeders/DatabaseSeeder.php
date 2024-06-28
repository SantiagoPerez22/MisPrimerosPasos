<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            PersonasSeeder::class,
            RolesSeeder::class,
            NivelSeeder::class,
            NucleoSeeder::class,
            AmbitoSeeder::class,
            SalaSeeder::class,
            CondicionSeeder::class,
            TutorAlumnoSeeder::class,
            AlergiaSeeder::class,
            EnfermedadesSeeder::class,
            InformeDiarioSeeder::class,
            InformeSemanalSeeder::class,
            CuentasSeeder::class,
            ClaseSeeder::class,
            AsistenciaSeeder::class,
            ObservacionesSeeder::class,
        ]);
    }
}
