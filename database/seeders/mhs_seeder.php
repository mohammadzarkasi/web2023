<?php

namespace Database\Seeders;

use App\Models\MhsModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class mhs_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MhsModel::factory()->count(50)->create();
        // DB::table('mhs')->insert([
        //     'nama' => Str::random(10),
        //     'nim' => Str::random(10),
        // ]);
    }
}
