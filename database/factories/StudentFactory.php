<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
            'user_id' => \App\Models\User::factory(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'program' => $this->faker->randomElement(['BSCS', 'BSIT', 'BSIS']),
            'enrollment_year' => $this->faker->year,
            'birthday' => $this->faker->dateTimeBetween('-25 years', '-18 years'),
        ];
    }
}
