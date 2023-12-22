<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;

class HelperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        DB::table('tbhelper')->insert([
            'nama_helper' => $faker->name,
            'email' => $faker->email,
            'tgl_lahir' => $faker->date,
            'foto_profile' => $faker->imageUrl,
            'nik' => $faker->randomNumber,
        ]);
    }
}
