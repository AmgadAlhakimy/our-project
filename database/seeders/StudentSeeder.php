<?php

namespace Database\Seeders;

use App\Models\Classroom\Classroom;
use App\Models\Parents\Parents;
use App\Models\Student\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fakerEn = Faker::create('en_US');
        $fakerAr = Faker::create('ar_SA');

        $array_num = 0;

        $gender_en = ['male', 'female'];
        $gender_ar = ['ذكر', 'أنثى'];

        $check_en = ['yes', 'no'];
        $check_ar = ['نعم', 'لا'];

        $classrooms = Classroom::all();
        $parents = Parents::all();

        for ($i = 1; $i <= 100; $i++) {
            Student::create([
                'id' => rand(1000000000, 9000000000),
                'name' => [
                    'en' => $fakerEn->firstName,
                    'ar' => $fakerAr->firstName,
                ],
                'photo' => 'photo',
                'address' => [
                    'en' => $fakerEn->streetAddress,
                    'ar' => $fakerAr->streetAddress,
                ],
                'gender' => [
                    'en' => $gender_en[$array_num],
                    'ar' => $gender_ar[$array_num],
                ],
                'birthdate' => $fakerEn->date($format = 'Y-m-d', $max = '2018-01-01'), // Random birthdate before 2018
                'place_of_birth' => [
                    'en' => $fakerEn->city,
                    'ar' => $fakerAr->city,
                ],
                'takes_medicine' => [
                    'en' => $check_en[$array_num],
                    'ar' => $check_ar[$array_num],
                ],
                'medicine_desc' => [
                    'en' => $array_num ? "" : "Takes medicine regularly",
                    'ar' => $array_num ? "" : "يتناول الدواء بانتظام",
                ],
                'has_allergy' => [
                    'en' => $check_en[$array_num],
                    'ar' => $check_ar[$array_num],
                ],
                'allergy_desc' => [
                    'en' => $array_num ? "" : "Allergic to peanuts",
                    'ar' => $array_num ? "" : "حساسية من الفول السوداني",
                ],
                'has_health_problem' => [
                    'en' => $check_en[$array_num],
                    'ar' => $check_ar[$array_num],
                ],
                'health_problem_desc' => [
                    'en' => $array_num ? "" : "Has mild asthma",
                    'ar' => $array_num ? "" : "يعاني من ربو خفيف",
                ],
                'classroom_id' => $classrooms->random()->id,
                'parents_id' => $parents->random()->id,
                'note' => 'No additional notes',
            ]);

            // Toggle gender & boolean values
            $array_num = ($array_num == 0) ? 1 : 0;
        }

    }
}
