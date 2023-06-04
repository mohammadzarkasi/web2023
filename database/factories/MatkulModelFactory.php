<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatkulModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_mata_kuliah' => $this->faker->name(),
            'kode_mata_kuliah' => $this->faker->text(5),
            'sks' => rand(2,4),
        ];
    }
}
