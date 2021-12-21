<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'synopsis' => $this->faker->paragraph(),
            'genre_id' => $this->faker->numberBetween(1, 8),
        ];
    }
}
