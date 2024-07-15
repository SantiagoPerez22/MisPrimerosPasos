<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([


            DomicilioSeeder::class,
            SalaSeeder::class,
            NivelSeeder::class,
            NucleoSeeder::class,
            AmbitoSeeder::class,
            CondicionSeeder::class,
            PersonaSeeder::class,
            TutorAlumnoSeeder::class,
            AlergiaSeeder::class,
            EnfermedadesSeeder::class,
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            InformeDiarioSeeder::class,
            InformeSemanalSeeder::class,
            ClaseSeeder::class,
            AsistenciaSeeder::class,
            ObservacionesSeeder::class,
            ]);
    }
}
