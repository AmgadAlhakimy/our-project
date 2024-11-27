<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<=5; $i++ ){
            Major::create([
                'name'=> [
                    'en'=>"Major $i",
                    'ar'=>"التخصص $i"
                ]
            ]);
        }
    }
}
