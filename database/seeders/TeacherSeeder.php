<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gender_en = ['male','female','male','female','male','female','male','female','male','female'];
        $gender_ar = ['ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى','ذكر','أنثى'];

        for($i = 1; $i<=10; $i++ ){
            Teacher::create([
                'name'=> [
                    'en'=>"teacher $i",
                    'ar'=>"مدرس $i",
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
                'contact'=>772342332+$i,
                'qualification'=> [
                    'en'=>"qualification $i",
                    'ar'=>"مؤهل $i",
                ],
                'salary'=>234+$i,
                'major' => [
                    'en' => "major $i",
                    'ar' =>"$i مجال",
                ],
                'note'=>'no note',
            ]);
        }
    }
}
