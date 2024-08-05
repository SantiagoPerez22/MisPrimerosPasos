<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Domicilio;

class PersonaSeeder extends Seeder
{
    public function run()
    {
        $domicilio1 = Domicilio::inRandomOrder()->first()->id;
        $domicilio2 = Domicilio::inRandomOrder()->skip(1)->first()->id;

        DB::table('personas')->insert([
            [
                'nombre1' => 'Juan',
                'nombre2' => 'Carlos',
                'apellido1' => 'Perez',
                'apellido2' => 'Gomez',
                'fecha_nacimiento' => '1992-04-01',
                'rut' => '12345678-9',
                'telefono' => '123456789',
                'email' => 'juan.perez@example.com',
                'domicilio_id' => $domicilio1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre1' => 'Maria',
                'nombre2' => 'Josefa',
                'apellido1' => 'Rodriguez',
                'apellido2' => 'Lopez',
                'fecha_nacimiento' => '1997-08-15',
                'rut' => '98765432-1',
                'telefono' => '987654321',
                'email' => 'maria.rodriguez@example.com',
                'domicilio_id' => $domicilio2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre1' => 'Pedro',
                'nombre2' => 'Manuel',
                'apellido1' => 'Garcia',
                'apellido2' => 'Martinez',
                'fecha_nacimiento' => '1984-01-10',
                'rut' => '11111111-2',
                'telefono' => '111222333',
                'email' => 'pedro.garcia@example.com',
                'domicilio_id' => $domicilio1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre1' => 'Francisco',
                'nombre2' => 'Andres',
                'apellido1' => 'Garcia',
                'apellido2' => 'Martinez',
                'fecha_nacimiento' => '1983-07-22',
                'rut' => '22222222-2',
                'telefono' => '333333333',
                'email' => 'francisco.garcia@example.com',
                'domicilio_id' => $domicilio2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre1' => 'Gabriel',
                'nombre2' => 'Sebastian',
                'apellido1' => 'Gatica',
                'apellido2' => 'Fernandez',
                'fecha_nacimiento' => '1985-12-05',
                'rut' => '33333333-2',
                'telefono' => '444444444',
                'email' => 'gabriel.gatica@example.com',
                'domicilio_id' => $domicilio1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
