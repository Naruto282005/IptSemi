<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Member;
use App\Models\Trainer;

class SessionFactory extends Factory
{
    public function definition(): array {
        return [
            'member_id' => Member::inRandomOrder()->first()->id ?? Member::factory(),
            'trainer_id' => Trainer::inRandomOrder()->first()->id ?? Trainer::factory(),
            'session_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'duration' => $this->faker->numberBetween(30, 120),
        ];
    }
}
