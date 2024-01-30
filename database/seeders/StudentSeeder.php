<?php

namespace Database\Seeders;

use App\Models\Classroom;
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
        $gender_en = [
            'male','female','male','female','male','female','male','female','male','female',
            'male','female','male','female','male','female','male','female','male','female',
            'male','female','male','female','male','female','male','female','male','female',
            'male','female','male','female','male','female','male','female','male','female',
            'male','female','male','female','male','female','male','female','male','female',
        ];
        $gender_ar = [
            'ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى',
            'ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى',
            'ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى',
            'ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى',
            'ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى',
        ];

        $classrooms = Classroom::all();
        $relatives = Relative::all();
        for($i = 1; $i<=10; $i++ ){
            Student::create([
                'name'=> [
                    'en'=>"Student $i",
                    'ar'=>"الطالب $i",
                ],
                'photo'=>'photo',
                'address'=> [
                    'en'=>"Al-thlatheen $i",
                    'ar'=>"الثلاثين $i",
                ],
                'gender'=> [
                    'en'=>$gender_en[$i-1],
                    'ar'=>$gender_ar[$i-1],
                ],
                'birthdate'=>"20".$i."-02-03",
                'place_of_birth'=> [
                    'en'=>"place $i",
                    'ar'=>"مكان $i",
                ],
                'classroom_id'=>$classrooms->random()->id,
                'relative_id'=>$relatives->random()->id,
                'note'=>'no note',
            ]);
        }
    }
}
