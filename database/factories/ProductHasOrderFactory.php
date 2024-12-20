<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductHasOrder>
 */
class ProductHasOrderFactory extends Factory
{
    use HasFactory;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'products_id'=>fake()->randomElement(Product::pluck('id')),
            'orders_id'=>fake()->randomElement(Order::pluck('id'))
        ];
    }
}
