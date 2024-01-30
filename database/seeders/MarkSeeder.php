<?php

namespace Database\Seeders;

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
        $students = Student::all();
        $subjects = Subject::all();
     for($i = 1; $i<=70; $i++ ){
         Mark::create([
             'student_id'=> $students->random()->id,
             'subject_id'=> $subjects->random()->id,
         ]);
     }
    }
}
