<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Good>
 */
class GoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => '1', // Admin
            'title' => fake()->userName(),
            'price' => round(rand(999, 12000), -2),
            'properties' => [
                'color' => fake()->colorName(),
                'size' => fake()->randomElement([
                    'M', 'X', 'L', 'XXL'
                ]),
            ]
        ];
    }
}
