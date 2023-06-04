<?php

namespace Database\Factories;

use App\Models\MhsModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class mhs_factoryFactory extends Factory
{
    protected $model = MhsModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->text(20),
        ];
    }
}
