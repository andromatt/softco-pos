<?php

namespace Database\Seeders;

use App\Models\Moneda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Moneda::insert([
            [
                'id' => 1,
                'estandar_iso' => 'MXN',
                'nombre_completo' => 'Peso Mexicano',
                'simbolo' => '$'
            ]
        ]);
    }
}