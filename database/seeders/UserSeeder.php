<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     $faker = Faker::create();

    //     foreach (range(1, 8) as $index) {
    //         DB::table('users')->insert([
    //             'name' => $faker->name,
    //             'email' => $faker->unique()->safeEmail,
    //             'age' => $faker->numberBetween(18, 60),
    //             'city' => $faker->city,
    //             // 'created_at' => now(),
    //             // 'updated_at' => now(),
    //         ]);
    //     }
    // }
}

}
