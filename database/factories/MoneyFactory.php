<?php

namespace Database\Factories;

use App\Models\MoneyVariations;
use App\Models\Stocks;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Money>
 */
class MoneyFactory extends Factory
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
            'amount' => fake()->randomFloat(2, 0, 10000000000),
            'rate' => fake()->randomFloat(4, 0.01, 100),
            'country' => fake()->countryCode(),
            'first_minted' => fake()->dateTimeAD(),
        ];
    }
}
