<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Genera un usuario específico con equipo personal
        User::factory()->withPersonalTeam()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Genera 10 usuarios adicionales sin equipos personales
        User::factory(10)->create();

        // Genera 50 productos y asigna cada uno a un usuario aleatorio
        Product::factory(50)->create();
    }
}
