<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Random ime proizvoda
            'description' => $this->faker->sentence, // Random opis
            'price' => $this->faker->randomFloat(2, 10, 1000), // Random cena od 10 do 1000 sa dve decimale
            'stock' => $this->faker->numberBetween(1, 100), // Random stock između 1 i 100
        ];
    }
}
