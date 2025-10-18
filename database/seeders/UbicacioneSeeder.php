<?php

namespace Database\Seeders;

use App\Models\Ubicacione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UbicacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ubicacione::insert([
            [
                'nombre' => 'Mostrador / Frente de Tienda',
            ],
            [
                'nombre' => 'Bodega / Almacén Trasero',
            ],
            [
                'nombre' => 'Estante de Cafe Oscuro',
            ],
            [
                'nombre' => 'Estante de Cafe Medio',
            ],
            [
                'nombre' => 'Estante de cafe Claro',
            ]
        ]);
    }
}