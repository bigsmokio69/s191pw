<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([[
            'nombre' => 'Juan',
            'apellido' => 'Villalobos',
            'correo' => 'juanvilla@gmail.com',
            'telefono' => '1234567890'
        ], 
        [
            'nombre' => 'Yuki',
            'apellido' => 'Makoto',
            'correo' => 'doorkun@gmail.com',
            'telefono' => '2233445566'
        ], 
        [
            'nombre' => 'Aigis',
            'apellido' => 'Makoto',
            'correo' => 'toaster@gmail.com',
            'telefono' => '9998886667'
        ]
        ]);
    }
}
