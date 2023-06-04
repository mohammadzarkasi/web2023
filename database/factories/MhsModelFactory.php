<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MhsModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nim' => $this->faker->randomNumber(9),
            'nama' => $this->faker->name(),
        ];
    }
}
