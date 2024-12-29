<?php

namespace Database\Seeders;

use App\Models\Classroom\Classroom;
use App\Models\Parents;
use App\Models\Relative;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_num = 0;

        $gender_en = ['male', 'female'];
        $gender_ar = ['ذكر', 'أنثى'];

        $check_en = ['yes', 'no'];
        $check_ar = ['نعم', 'لا'];

        $classrooms = Classroom::all();
        $parents = Parents::all();
        for ($i = 1; $i <= 100; $i++) {
            Student::create([
                'name' => [
                    'en' => "Student $i",
                    'ar' => "الطالب $i",
                ],
                'photo' => 'photo',
                'address' => [
                    'en' => "Al-Thlatheen $i",
                    'ar' => "الثلاثين $i",
                ],
                'gender' => [
                    'en' => $gender_en[$array_num],
                    'ar' => $gender_ar[$array_num],
                ],
                'birthdate' => "2023-02-03",
                'place_of_birth' => [
                    'en' => "place $i",
                    'ar' => "مكان $i",
                ],
                'takes_medicine' => [
                    'en' => $check_en[$array_num],
                    'ar' => $check_ar[$array_num],
                ],
                'medicine_desc' => [
                    'en' => "he doesn't take anything $i",
                    'ar' => "هو لا ياخذ اي علاج $i",
                ],
                'has_allergy' => [
                    'en' => $check_en[$array_num],
                    'ar' => $check_ar[$array_num],
                ],
                'allergy_desc' => [
                    'en' => "He have a allergy $i",
                    'ar' => "لدية حساسية من الفول الفلافل $i",
                ],
                'has_health_problem' => [
                    'en' => $check_en[$array_num],
                    'ar' => $check_ar[$array_num],
                ],
                'health_problem_desc' => [
                    'en' => "he can't walk like any kid $i",
                    'ar' => "لا يستطيع المشي على قدمية كاي طفل اخر $i",
                ],
                'classroom_id' => $classrooms->random()->id,
                'parents_id' => $parents->random()->id,
                'note' => 'no note',
            ]);
            $array_num = ($array_num == 0) ? 1 : 0;
        }
    }
}
