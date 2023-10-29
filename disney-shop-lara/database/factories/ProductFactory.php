<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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
        $category = ['เทียน', 'สร้อย'];

        return [
            'model_code' => $this->faker->text(20),
            'name' => $this->faker->name(),
            'qty' => $this->faker->numberBetween(10, 10),
            'price' => $this->faker->numberBetween(10, 2000),
            'size' => $this->faker->numberBetween(10, 50),
            'category' => $this->faker->randomElement($category),
        ];
    }
}
