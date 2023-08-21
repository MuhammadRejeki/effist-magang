<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'company_id' => $this->faker->numberBetween(1, 5),
            'employement_status_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$NzEuqGkb1rw/0SLklDIsSeGqba7rAW8ELN.R/sgW3uV05xfC64MPW', // admin
            'gender' => $gender,
            'marital_status' => $this->faker->randomElement(['single', 'married']),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
