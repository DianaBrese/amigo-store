<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{

    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'address_street'=> fake()->streetName(),
            'address_number'=> fake()->buildingNumber(),
            'address_neibourhood' => fake()->country(),
            'address_city'=> fake()->city(),
            'address_code'=>fake()->postcode()

        ];
    }
}
