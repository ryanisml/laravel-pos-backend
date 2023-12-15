<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(1000, 100000),
            'stock' => fake()->numberBetween(1, 100),
            'image_path' => fake()->imageUrl(),
            'category' => fake()->randomElement(['food', 'drink', 'snack']),
        ];
    }
}
