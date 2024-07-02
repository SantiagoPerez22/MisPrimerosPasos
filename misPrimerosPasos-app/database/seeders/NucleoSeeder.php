<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NucleoSeeder extends Seeder
{
    public function run()
    {
        DB::table('nucleo')->insert([
            'nombre' => 'Corporalidad y Movimiento',
            'descripcion' => 'Desarrollo motriz',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nucleo')->insert([
            'nombre' => 'Convivencia y Ciudadanía',
            'descripcion' => 'Aprender a vivir en sociedad',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nucleo')->insert([
            'nombre' => 'Identidad y Autonomía',
            'descripcion' => 'Conocimiento y desenvolvimiento del sujeto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nucleo')->insert([
            'nombre' => 'Lenguaje Verbal',
            'descripcion' => 'Comunicación verbal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nucleo')->insert([
            'nombre' => 'Lenguajes Artísticos',
            'descripcion' => 'Comunicación no verbal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nucleo')->insert([
            'nombre' => 'Exploración del Entorno Natural',
            'descripcion' => 'Relación y desenvolvimiento con el medio natural',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nucleo')->insert([
            'nombre' => 'Comprensión del Entorno Sociocultural',
            'descripcion' => 'Relación y desenvolvimiento con el medio social y cultural',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nucleo')->insert([
            'nombre' => 'Pensamiento Matemático',
            'descripcion' => 'Desarrollo de ideas abstractas y lógicas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}