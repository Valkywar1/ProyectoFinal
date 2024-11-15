<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product; // Cambiado para referirse correctamente a Product

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Genera 10 usuarios
        User::factory(10)->create();

        // Genera 50 productos y asigna cada uno a un usuario aleatorio
        Product::factory(50)->create(); // Cambiado para usar Product
    }
}
