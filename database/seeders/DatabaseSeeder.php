<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Group;
use App\Models\Major;
use App\Models\Student;
use App\Models\University;
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

        for($i=1; $i <= 11; $i++){
            University::create(['name' => 'University' . $i]);
        }

        for($i=1; $i <= 6; $i++){
            Course::create(['name' => 'Course ' . $i]);
        }

        for($i=1; $i <= 13; $i++){
            Address::create(['name' => 'Address ' . $i]);
        }

        for($i=1; $i <= 12; $i++){
            Faculty::create([
                'name' => 'Faculty' . $i,
                'university_id' => rand(1, 11),
            ]);
        }

        for($i=1; $i <= 30; $i++){
            Major::create([
                'faculty_id' => rand(1, 12),
                'name' => 'Major' . $i,
            ]);
        } 

        for($i=1; $i <= 50; $i++){
            Group::create([
                'major_id' => rand(1, 30),
                'name' => 'Group' . $i,
                'course_id' => rand(1, 6),
            ]);
        }  
        
        for($i=1; $i <= 5000; $i++){
            Student::create([
                'group_id' => rand(1, 50),
                'address_id' => rand(1, 13),
                'name' => 'Student' . $i,
                'phone' => '+' . (99893000000 + $i),
            ]);
        } 

    }
}
