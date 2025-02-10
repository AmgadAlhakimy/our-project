<?php

namespace Database\Seeders;

use App\Models\Classroom\Classroom;
use App\Models\Classroom\ClassroomSubject;
use App\Models\Subject\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClassroomSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = Classroom::all();
        $subjects = Subject::all();
        $users= User::all();
        foreach ($classrooms as $classroom) {
            $usedSubjectIds = [];

            for ($i = 1; $i <= 5; $i++) {
                do {
                    $randomSubject = $subjects->random();
                    $subjectId = $randomSubject->id;
                } while (in_array($subjectId, $usedSubjectIds));

                $usedSubjectIds[] = $subjectId;

                ClassroomSubject::create([
                    'classroom_id' => $classroom->id,
                    'subject_id' => $subjectId,
                    'user_id' => $users->random()->id,
                ]);
            }
        }
    }

}
