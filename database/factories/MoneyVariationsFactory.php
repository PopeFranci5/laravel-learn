<?php

namespace Database\Factories;

use App\Models\Money;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MoneyVariations>
 */
class MoneyVariationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $material = ['paper', 'cotton', 'plastic'];
        return [
            'name' => fake()->word(),
            'money_id' => Money::inRandomOrder()->first()->id,
            'material' => $material[rand(0, 2)],
            'color' => fake()->hexColor(),
        ];
    }
}
