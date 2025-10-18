<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::insert([
            'nombre' => 'SoftCo',
            'propietario' => 'SoftCo venta de Café S.A. de C.V.',
            'ruc' => 'XAXX010101000',
            'porcentaje_impuesto' => '16',
            'abreviatura_impuesto' => 'IVA',
            'direccion' => 'C. Galeana 401, El Rastro, 92124 Tantoyuca, Ver.',
            'correo' => 'contacto@softco.com',
            'telefono' => '7891093003',
            'ubicacion' => 'Tantoyuca, Veracruz, México',
            'moneda_id' => 1
        ]);
    }
}