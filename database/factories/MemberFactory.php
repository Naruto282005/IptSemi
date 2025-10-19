<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    public function definition(): array {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 60),
            'contact_number' => $this->faker->phoneNumber(),
            'membership_type' => $this->faker->randomElement(['Basic', 'Premium', 'VIP']),
        ];
    }
}
