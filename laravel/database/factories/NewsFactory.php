<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 7),
            'title' => $this->faker->sentence(mt_rand(2, 7)),
            'content' => $this->faker->sentence(mt_rand(12, 30)),
        ];
    }
}
