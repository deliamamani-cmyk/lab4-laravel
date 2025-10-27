<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Producto::create([
            'nombre' => 'Laptop Lenovo',
            'precio' => 4800.50,
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'Saten antiadherente',
            'precio' => 120.00,
            'categoria_id' => 2
        ]);
        Producto::create([
            'nombre' => 'Camiseta deportiva',
            'precio' => 85.90,
            'categoria_id' => 3
        ]);
    }
}
