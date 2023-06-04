<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        // DB::table('mhs')->insert([
        //     'nama' => Str::random(10),
        //     'nim' => Str::random(10),
        //     'tempat_lahir' => 'jember',
        // ]);

        $this->call(MatkulSeeder::class);
        $this->call(mhs_seeder::class);
        $this->call(PesertaMatkulSeeder::class);
    }
}
