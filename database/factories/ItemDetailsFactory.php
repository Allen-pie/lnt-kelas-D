<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemDetails>
 */
class ItemDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'weight' => fake()->randomFloat(2, 1, 10),
            'length' => fake()->randomFloat(2, 1, 10),
            'width' => fake()->randomFloat(2, 1, 10),
            'height'=> fake()->randomFloat(2, 1, 10),
            'manufacturer' => fake()->company(),
            'item_id' => fake()->numberBetween(1, 10)
        ];
    }
}
