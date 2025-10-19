<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerFactory extends Factory
{
    public function definition(): array {
        return [
            'name' => $this->faker->name(),
            'specialization' => $this->faker->randomElement(['Yoga', 'Zumba', 'Cardio', 'Strength']),
            'experience_years' => $this->faker->numberBetween(1, 15),
        ];
    }
}
