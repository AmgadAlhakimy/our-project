<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $classrooms = Classroom::all();
        foreach ($classrooms as $classroom) {
            $subjects = $classroom->subjects;
            foreach ($subjects as $subject) {
                $students = $classroom->students;
                foreach ($students as $student) {
                    Mark::create([
                        'student_id' => $student->id,
                        'subject_id' => $subject->id,
                        'classroom_id' => $classroom->id,
                    ]);
                }
            }
        }
    }
}
