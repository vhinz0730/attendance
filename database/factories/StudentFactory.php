<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'year_level' => fake()->randomElement(['first year', 'second year', 'third year', 'fourth year']),
            'section' => fake()->randomElement(['a', 'b', 'c', 'd']),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
