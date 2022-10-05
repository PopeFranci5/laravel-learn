<?php

namespace Database\Factories;

use App\Models\Money;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stocks>
 */
class StocksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->currencyCode(),
            'money_id' => Money::inRandomOrder()->first()->id,
            'price' => fake()->randomFloat(4, 0.01, 10000),
            'year_to_date' => fake()->randomFloat(2, -100, 500),
        ];
    }
}
