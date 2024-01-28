<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\EducationalLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = EducationalLevel::all();
        for($i = 1; $i<=10; $i++ ){
            Classroom::create([
                'name'=> [
                    'en'=>"classroom $i",
                    'ar'=>"الفصل $i",
                ],
                'cost'=>200+$i,
                'edu_id'=>$levels->random()->id,
            ]);
        }
    }
}
