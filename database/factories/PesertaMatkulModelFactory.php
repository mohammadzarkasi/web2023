<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PesertaMatkulModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_mahasiswa' => rand(1, 50),
            'id_mata_kuliah' => rand(1,50),
        ];
    }
}
