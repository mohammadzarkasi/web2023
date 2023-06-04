<?php

namespace Database\Seeders;

use App\Models\PesertaMatkulModel;
use Illuminate\Database\Seeder;

class PesertaMatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PesertaMatkulModel::factory()->count(50)->create();
    }
}
