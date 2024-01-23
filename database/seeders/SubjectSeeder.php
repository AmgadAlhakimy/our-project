<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<=10; $i++ ){
            Subject::create([
                'name'=> [
                    'en'=>"subject $i",
                    'ar'=>"المادة $i"
                ]
            ]);
        }
    }
}
