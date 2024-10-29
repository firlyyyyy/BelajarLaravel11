<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($data = 1; $data <= 20; $data ++) {
            DB::table('siswas')->insert([
                'nama' => $faker->name,
                'nis' => $faker->randomNumber(9),
                'alamat' => $faker->address
            ]);
        }
    }
}
