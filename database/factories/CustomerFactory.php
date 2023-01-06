<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'long_name' => fake()->name,
            'station_code' => fake()->randomNumber('5'),
            'retailer_code' => fake()->randomNumber('6'),
            'subject' => fake()->name,
            'address' => fake()->address,
            'city' => fake()->city,
        ];
    }
}
