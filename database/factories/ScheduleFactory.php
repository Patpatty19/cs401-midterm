<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_id' => \App\Models\Course::factory(), // This ensures a course is created and linked
            'day_of_week' => $this->faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']),
            'time_slot' => $this->faker->dateTimeBetween('09:00:00', '17:00:00'),
            'room' => 'Room ' . $this->faker->numberBetween(100, 499),
            'term' => $this->faker->numberBetween(1, 2),
        ];
    }
}
