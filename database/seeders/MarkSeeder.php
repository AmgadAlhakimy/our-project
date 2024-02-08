<?php

namespace Database\Seeders;

use App\Models\Classroom\Classroom;
use App\Models\Mark;
use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//        $classrooms = Classroom::all();
//        foreach ($classrooms as $classroom) {
//            $subjects = $classroom->subjects;
//            foreach ($subjects as $subject) {
//                $students = $classroom->students;
//                foreach ($students as $student) {
//                    Mark::create([
//                        'student_id' => $student->id,
//                        'subject_id' => $subject->id,
//                        'classroom_id' => $classroom->id,
//                    ]);
//                }
//            }
//        }
    }
}
