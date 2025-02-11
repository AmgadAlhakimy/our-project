<?php

namespace Database\Seeders;

use App\Models\Absent;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Student\Student;
use Faker\Factory as Faker;

class AbsentSeeder extends Seeder
{

    public function run(): void
    {

        $faker = Faker::create();
        $students = Student::all();
        $users= User::all();

        $absenceReasons = [
            'Sick leave',
            'Family emergency',
            'Doctor’s appointment',
            'Traveling',
            'Personal reasons',
            'Weather conditions',
            'Missed the bus',
            'Overslept',
            'School event conflict',
            'Unspecified reason'
        ];

        for ($i = 1; $i <= 10; $i++) {
            $student = $students->random();

            Absent::create([
                'absent' => true,
                'absent_reason' => $faker->randomElement($absenceReasons),
                'student_id' => $student->id,
                'classroom_id' => $student->classroom->id,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
