<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

      Course::factory()->create([
            'courseName' => 'PHP',
            'courseID' => 'HTTP5225'
        ]);

        Course::factory()->create([
            'courseName' => 'Java',
            'courseID' => 'HTTP5226',
        ]);

        Course::factory()->create([
            'courseName' => 'JavaScript',
            'courseID' => 'HTTP5227'
        ]);

        Course::factory()->create([
            'courseName' => 'React',
            'courseID' => 'HTTP5228'
        ]);

        Course::factory()->create([
            'courseName' => 'Vuejs',
            'courseID' => 'HTTP5229'
        ]);


        Student::factory(20)->create();
    }
}
