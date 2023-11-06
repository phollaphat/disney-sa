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
        $categories = ['Jewelry', 'Scented Candle'];

        return [
            'model_code' => fake()->unique()->regexify('[A-Za-z]{15}'),
            'image_path' => '65491f3c6fec2.png',
            'category' => $this->faker->randomElement($categories),
            'name' => fake()->name(),
            'price' => fake()->numberBetween(500, 1000),
            'size' => 10,
            'stock_quantity' => fake()->numberBetween(0, 5),
        ];
    }
}
