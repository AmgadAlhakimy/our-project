<?php

namespace Database\Seeders;

use App\Models\Classs;
use App\Models\EducationalLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = EducationalLevel::all();
        for($i = 1; $i<=10; $i++ ){
            Classs::create([
                'name'=> [
                    'en'=>"class $i",
                    'ar'=>"الفصل $i",
                ],
                'cost'=>200+$i,
                'edu_id'=>$levels->random()->id,
            ]);
        }
    }
}
