<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Subject;
use App\Models\SubjectClassroom;
use Illuminate\Database\Seeder;

class SubjectClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = Classroom::all();
        $subjects = Subject::all();

        for($i = 1; $i<=80; $i++ ){
            SubjectClassroom::create([
            'classroom_id'=>$classrooms->random()->id,
            'subject_id'=>$subjects->random()->id,
                ]);
        }
    }
}
