<?php

namespace Database\Seeders;

use App\Models\EducationalLevel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationalLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users= User::all();
        $educationalLevels = [
            ['en' => 'Kindergarten', 'ar' => 'الروضة'],
            ['en' => 'Primary School', 'ar' => 'المرحلة الابتدائية'],
            ['en' => 'Middle School', 'ar' => 'المرحلة المتوسطة'],
            ['en' => 'High School', 'ar' => 'المرحلة الثانوية'],
        ];

        foreach ($educationalLevels as $level) {
            EducationalLevel::create([
                'name' => $level,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
