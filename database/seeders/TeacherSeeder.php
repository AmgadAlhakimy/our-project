<?php

namespace Database\Seeders;

use App\Models\Teacher\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users= User::all();
        $fakerEn = Faker::create('en_US'); // English Faker
        $fakerAr = Faker::create('ar_SA'); // Arabic Faker

        $gender_en = ['male', 'female'];
        $gender_ar = ['ذكر', 'أنثى'];
        $arabic_titles = ['male' => 'أستاذ', 'female' => 'أستاذة'];

        $qualifications = [
            ['en' => 'Bachelor of Education', 'ar' => 'بكالوريوس التربية'],
            ['en' => 'Master of Education', 'ar' => 'ماجستير التربية'],
            ['en' => 'PhD in Education', 'ar' => 'دكتوراه في التربية']
        ];

        $majors = [
            ['en' => 'Mathematics', 'ar' => 'الرياضيات'],
            ['en' => 'Science', 'ar' => 'العلوم'],
            ['en' => 'English', 'ar' => 'اللغة الإنجليزية'],
            ['en' => 'Arabic', 'ar' => 'اللغة العربية'],
            ['en' => 'History', 'ar' => 'التاريخ'],
            ['en' => 'Geography', 'ar' => 'الجغرافيا'],
            ['en' => 'Physics', 'ar' => 'الفيزياء'],
            ['en' => 'Chemistry', 'ar' => 'الكيمياء']
        ];

        for ($i = 1; $i <= 10; $i++) {
            $genderIndex = $i % 2; // Alternates between 0 and 1
            $gender = $gender_en[$genderIndex];
            $genderAr = $gender_ar[$genderIndex];
            $arabicTitle = $arabic_titles[$gender];

            $fullNameEn = $fakerEn->name($gender);
            $fullNameAr = $fakerAr->name($gender);

            $qualification = $qualifications[array_rand($qualifications)];
            $major = $majors[array_rand($majors)];

            Teacher::create([
                'name' => [
                    'en' => $fullNameEn,
                    'ar' => "$arabicTitle $fullNameAr",
                ],
                'photo' => 'photo',
                'address' => [
                    'en' => "Al-Thlatheen $i",
                    'ar' => "الثلاثين $i",
                ],
                'gender' => [
                    'en' => $gender,
                    'ar' => $genderAr,
                ],
                'contact' => 772342332 + $i,
                'qualification' => [
                    'en' => $qualification['en'],
                    'ar' => $qualification['ar'],
                ],
                'major' => [
                    'en' => $major['en'],
                    'ar' => $major['ar'],
                ],
                'note' => 'no note',
                'user_id' => $users->random()->id,
            ]);
        }

    }
}
