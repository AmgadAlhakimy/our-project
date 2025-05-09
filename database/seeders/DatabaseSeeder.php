<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'MyTest User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            EducationalLevelSeeder::class,
            ClassroomSeeder::class,
            SubjectSeeder::class,
            ActivitySeeder::class,
            ParentsSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            ClassroomSubjectSeeder::class,
//            AbsentSeeder::class,
        ]);
    }
}
