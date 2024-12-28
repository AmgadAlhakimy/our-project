<?php

namespace Database\Seeders;

use App\Models\Teacher\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $my_gender = 0;
        $gender_en = ['male', 'female'];
        $gender_ar = ['ذكر', 'أنثى'];

        for ($i = 1; $i <= 10; $i++) {
            Teacher::create([
                'name' => [
                    'en' => "Teacher $i",
                    'ar' => "مدرس $i",
                ],
                'photo' => 'photo',
                'address' => [
                    'en' => "Al-thlatheen $i",
                    'ar' => "الثلاثين $i",
                ],
                'gender' => [
                    'en' => $gender_en[$my_gender],
                    'ar' => $gender_ar[$my_gender],
                ],
                'contact' => 772342332 + $i,
                'qualification' => [
                    'en' => "qualification $i",
                    'ar' => "مؤهل $i",
                ],
                'major' => [
                    'en' => "major $i",
                    'ar' => "$i مجال",
                ],
                'note' => 'no note',
            ]);
            $my_gender = ($my_gender == 0) ? 1 : 0;
        }
    }
}
