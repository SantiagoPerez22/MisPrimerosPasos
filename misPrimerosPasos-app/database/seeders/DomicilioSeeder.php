<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Domicilio;

class DomicilioSeeder extends Seeder
{
    public function run()
    {
        Domicilio::create([
            'direccion' => 'Calle Falsa 123',
            'ciudad' => 'Springfield',
            'estado' => 'IL',
            'codigo_postal' => '62701',
        ]);

        Domicilio::create([
            'direccion' => '742 Evergreen Terrace',
            'ciudad' => 'Springfield',
            'estado' => 'IL',
            'codigo_postal' => '62702',
        ]);

        // Agrega más domicilios según sea necesario
    }
}
