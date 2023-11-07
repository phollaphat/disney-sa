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

        $picture = ['654a158723122.png', '654a172b9d080.png', '654a18a84e09d.png', '654a18bfd8a44.png', '654a1a6753b22.png', '654a1a8af2fed.png', '654a1a3e3b06d.png', '654a19e8a80c5.png', '654a19c5dcab9.png'];

        return [
            'model_code' => fake()->unique()->regexify('[A-Za-z]{15}'),
            'image_path' => $this->faker->randomElement($picture),
            'category' => $this->faker->randomElement($categories),
            'name' => fake()->name(),
            'price' => fake()->numberBetween(500, 1000),
            'size' => 10,
            'stock_quantity' => fake()->numberBetween(0, 5),
        ];
    }
}
