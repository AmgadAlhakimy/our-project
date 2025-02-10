<?php

namespace Database\Seeders;

use App\Models\Subject\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $subjects = [
            ['en' => 'Mathematics', 'ar' => 'الرياضيات'],
            ['en' => 'Science', 'ar' => 'العلوم'],
            ['en' => 'English', 'ar' => 'اللغة الإنجليزية'],
            ['en' => 'Arabic', 'ar' => 'اللغة العربية'],
            ['en' => 'Social Studies', 'ar' => 'الدراسات الاجتماعية'],
            ['en' => 'Islamic Studies', 'ar' => 'التربية الإسلامية'],
            ['en' => 'Physical Education', 'ar' => 'التربية البدنية'],
            ['en' => 'Computer Science', 'ar' => 'علوم الحاسب'],
            ['en' => 'Art', 'ar' => 'التربية الفنية'],
            ['en' => 'Music', 'ar' => 'الموسيقى'],
        ];

        foreach ($subjects as $subject) {
            Subject::create([
                'name' => $subject,
                'user_id' => $users->random()->id,
            ]);
        }

    }
}
