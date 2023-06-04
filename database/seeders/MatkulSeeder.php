<?php

namespace Database\Seeders;

use App\Models\MatkulModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        MatkulModel::factory()->count(50)->create();

        // for ($i = 0; $i < 50; $i++) {
        //     DB::table('mata_kuliah')->insert([
        //         'nama_mata_kuliah' => Str::random(20),
        //         'kode_mata_kuliah' => Str::random(5),
        //         'sks' => rand(1,4),
        //     ]);
        // }
    }
}
