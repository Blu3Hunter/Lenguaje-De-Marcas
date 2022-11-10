<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name' => fake()->word(),
            'description' => fake()->realText(),
            'category' => fake()->realText(),
            'price' => rand(1, 99),
            'stock' => rand(1, 999),
        ];
    }
}
