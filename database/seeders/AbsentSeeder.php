<?php

namespace Database\Seeders;

use App\Models\Absent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student\Student;

class AbsentSeeder extends Seeder
{

    public function run(): void
    {
        $students = Student::all();


        for($i = 1; $i<=10; $i++ ){
            Absent::create([
                'absent'=> true,
                'reason'=> "anything $i",
                'student_id' => $students->random()->id,
            ]);
        }
    }
}
