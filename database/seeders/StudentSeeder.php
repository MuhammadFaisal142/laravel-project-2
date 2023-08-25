<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonPath = database_path('json/student.json'); // Path to the 'student.json' file
        $data = json_decode(file_get_contents($jsonPath), true);

        foreach ($data as $item) {
            \App\Models\Student::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'age' => $item['age'],
                'city' => $item['city_id']
            ]);
        }
    }
}
