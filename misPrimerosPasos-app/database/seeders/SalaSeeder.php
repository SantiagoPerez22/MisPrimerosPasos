<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaSeeder extends Seeder
{
    public function run()
    {
        DB::table('sala')->insert([
            'numero' => 101,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sala')->insert([
            'numero' => 102,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sala')->insert([
            'numero' => 103,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sala')->insert([
            'numero' => 104,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sala')->insert([
            'numero' => 105,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

