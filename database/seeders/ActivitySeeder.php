<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<=10; $i++ ){
            Activity::create([
                'name'=> [
                    'en'=>"activity $i",
                    'ar'=>"النشاط $i",
                ],
                'location'=> [
                    'en'=>"location $i",
                    'ar'=>"الموقع $i",
                ],
                'contact'=>772546950+$i,
                'date'=>"2024-02-$i",
                'note'=>'no note',

            ]);
        }
    }
}
