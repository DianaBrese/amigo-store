<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'clients_id' => fake()->randomElement(Client::pluck('id')),
            'status' => fake()->boolean(),
            'delivery_address_street' => fake()->streetAddress(),
            'delivery_address_number' => fake()->buildingNumber(),
            'delivery_address_neibourhood' => fake()->country(),
            'delivery_address_city' => fake()->city(),
            'delivery_address_code' => fake()->postcode(),
            'freight_price'=> fake()->randomFloat(2, 10, 50),
            'products_price'=>fake()->randomFloat(2, 15, 1000),
            'total_price'=> fn (array $attributes) => $attributes['freight_price'] + $attributes['products_price'],
        ];
    }
}
