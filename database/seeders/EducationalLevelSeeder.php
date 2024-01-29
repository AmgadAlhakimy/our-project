<?php

namespace Database\Seeders;

use App\Models\EducationalLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationalLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<=4; $i++ ){
        EducationalLevel::create([
            'name'=> [
                'en'=>"Level $i",
                'ar'=>"المرحلة $i",
            ]
        ]);
        }
    }
}
