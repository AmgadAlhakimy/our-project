<?php

namespace Database\Seeders;

use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = EducationalLevel::all();
        for($i = 1; $i<=12; $i++ ){
            Classroom::create([
                'name'=> [
                    'en'=>"class $i",
                    'ar'=>"الصف $i",
                ],
                'edu_id'=>$levels->random()->id,
            ]);
        }
    }
}
