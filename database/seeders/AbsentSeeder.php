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
        for ($i = 1; $i <= 10; $i++) {
            $student_id = $students->random()->id;
            $student = Student::where('id',$student_id)->first();
            $classroom_id = $student->classroom->id;
            Absent::create([
                'absent' => true,
                'absent_reason' => "anything $i",
                'student_id' => $student_id,
                'classroom_id' => $classroom_id,
            ]);
        }
    }
}
