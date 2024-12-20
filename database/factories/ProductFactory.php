<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'price'=>fake()->randomFloat(2, 10, 300),
            'stock'=> fake()->randomNumber(2, false),
            'image'=>'https://source.unsplash.com/random',
            'categories_id'=>fake()->randomElement(Category::pluck('id'))

        ];
    }
}
