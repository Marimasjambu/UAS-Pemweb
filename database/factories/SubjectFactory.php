<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'lecturer_id' => fake()->numberBetween(1, 30),
            'lecturer_name' => fake()->name(),
            'semester' => fake()->numberBetween(1,8),
            'academic_year' => "2023/2034",
            'sks' => fake()->numberBetween(1,5),
            'code' => fake()->bothify('??-####'),
            'description' => fake()->word(),
        ];
    }
}
