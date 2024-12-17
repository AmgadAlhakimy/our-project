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
        
        $gender_en = [ 'male','female','male','female','male','female','male','female','male','female',];
        $gender_ar = [ 'ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى',];

        $chick_en = [ 'yes','no','yes','no','yes','no','yes','no','yes','no',];
        $chick_ar = [ 'نعم','لا','نعم','لا','نعم','لا','نعم','لا','نعم','لا',];


        $classrooms = Classroom::all();
        $parents = Parents::all();
        for($i = 1; $i<=100; $i++ ){
            Student::create([
                'name'=> [
                    'en'=>"CreateStudent $i",
                    'ar'=>"الطالب $i",
                ],
                'photo'=>'photo',
                'address'=> [
                    'en'=>"Al-thlatheen $i",
                    'ar'=>"الثلاثين $i",
                ],
                'gender'=> [
                    'en'=>$gender_en[rand(0,9)],
                    'ar'=>$gender_ar[rand(0,9)],
                ],
                'birthdate'=>"2023-02-03",
                'place_of_birth'=> [
                    'en'=>"place $i",
                    'ar'=>"مكان $i",
                ],
                'chick_medicine'=> [
                    'en'=>$chick_en[rand(0,9)],
                    'ar'=>$chick_ar[rand(0,9)],
                ],
                'medicine_desc'=> [
                    'en'=>"he dos't take anything $i",
                    'ar'=>"هو لا ياخذ اي علاج $i",
                ],
                'chick_allergy'=> [
                    'en'=>$chick_en[rand(0,9)],
                    'ar'=>$chick_ar[rand(0,9)],
                ],
                'allergy_desc'=> [
                    'en'=>"He have a allergy $i",
                    'ar'=>"لدية حساسية من الفول الفلافل $i", 
                ],
                'chick_health_problem'=> [
                    'en'=>$chick_en[rand(0,9)],
                    'ar'=>$chick_ar[rand(0,9)],
                ],
                'health_problem_desc'=> [
                    'en'=>"he can't walk like any kid $i",
                    'ar'=>"لا يستطيع المشي على قدمية كاي طفل اخر $i", 
                ],


                'classroom_id'=>$classrooms->random()->id,
                'parents_id'=>$parents->random()->id,
                'note'=>'no note',
            ]);
        }
    }
}
