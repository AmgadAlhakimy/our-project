<?php

namespace Database\Seeders;

use App\Models\Classs;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gender_en = ['male','female','male','female','male','female','male','female','male','female'];
        $gender_ar = ['ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى'];

        $classes = Classs::all();
        $relatives = Classs::all();
        for($i = 1; $i<=10; $i++ ){
            Student::create([
                'name'=> [
                    'en'=>"student $i",
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
                'birthdate'=>"2020-02-$i",
                'place_of_birth'=> [
                    'en'=>"place $i",
                    'ar'=>"مكان $i",
                ],
                'class_id'=>$classes->random()->id,
                'relative_id'=>$relatives->random()->id,
            ]);
        }
    }
}
