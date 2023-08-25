<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class citystudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $cityJsonPath = database_path('json/city.json'); // Path to the 'city.json' file
        $cityData = json_decode(file_get_contents($cityJsonPath), true);

        foreach ($cityData as $city) {
            // Assuming you have a City model or table
            \App\Models\citystudent::create([
                'id' => $city['id'],
                'city_name' => $city['name']
            ]);
        }
    }
}
