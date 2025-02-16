<?php

namespace Database\Seeders;

use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = EducationalLevel::all();
        $users= User::all();

        $classNames = [
            ['en' => 'Nursery', 'ar' => 'الحضانة'],
            ['en' => 'Pre-K', 'ar' => ' ما قبل الروضة'],
            ['en' => 'KG1', 'ar' => 'الروضة الأولى'],
            ['en' => 'KG2', 'ar' => 'الروضة الثانية'],
            ['en' => 'KG3', 'ar' => 'الروضة الثالثة'],
        ];


        foreach ($classNames as $class) {
            Classroom::create([
                'name' => $class,
                'edu_id' => $levels->random()->id,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
