<?php

namespace Database\Seeders;

use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = EducationalLevel::all();

        $classNames = [
            ['en' => 'Kindergarten One', 'ar' => 'الروضة الأولى'],
            ['en' => 'Kindergarten Two', 'ar' => 'الروضة الثانية'],
            ['en' => 'First Grade', 'ar' => 'الصف الأول'],
            ['en' => 'Second Grade', 'ar' => 'الصف الثاني'],
            ['en' => 'Third Grade', 'ar' => 'الصف الثالث'],
            ['en' => 'Fourth Grade', 'ar' => 'الصف الرابع'],
            ['en' => 'Fifth Grade', 'ar' => 'الصف الخامس'],
            ['en' => 'Sixth Grade', 'ar' => 'الصف السادس'],
            ['en' => 'Seventh Grade', 'ar' => 'الصف السابع'],
            ['en' => 'Eighth Grade', 'ar' => 'الصف الثامن'],
            ['en' => 'Ninth Grade', 'ar' => 'الصف التاسع'],
            ['en' => 'Tenth Grade', 'ar' => 'الصف العاشر'],
            ['en' => 'Eleventh Grade', 'ar' => 'الصف الحادي عشر'],
            ['en' => 'Twelfth Grade', 'ar' => 'الصف الثاني عشر'],
        ];


        foreach ($classNames as $class) {
            Classroom::create([
                'name' => $class,
                'edu_id' => $levels->random()->id, // Assign to a random educational level
            ]);
        }
    }
}
