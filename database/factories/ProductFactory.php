<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 10, 500), // Precio entre 10 y 500
            'description' => $this->faker->sentence(),
            'user_id' => User::inRandomOrder()->first()->id, // Asigna un ID de usuario aleatorio
        ];
    }
}
