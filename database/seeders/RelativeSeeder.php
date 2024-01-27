<?php

namespace Database\Seeders;

use App\Models\Relative;
use App\Models\Student;
use Illuminate\Database\Seeder;

class RelativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<=10; $i++ ){
            Relative::create([
                'father_name'=> [
                    'en'=>"father $i",
                    'ar'=>"الأب $i",
                ],
                'father_work'=> [
                    'en'=>"work $i",
                    'ar'=>"وظيفة $i",
                ],
                'father_contact1'=>773215420+$i,
                'father_contact2'=>775515880+$i,

                'mother_name'=> [
                    'en'=>"mother $i",
                    'ar'=>"الأم $i",
                ],
                'mother_work'=> [
                    'en'=>"work $i",
                    'ar'=>"وظيفة $i",
                ],
                'mother_contact1'=>773215420+$i,
                'mother_contact2'=>775515880+$i,
                'kin_name'=> [
                    'en'=>"kin $i",
                    'ar'=>"قريب $i",
                ],
                'kin_relationship'=> [
                    'en'=>"relation $i",
                    'ar'=>"علاقة $i",
                ],
                'kin_contact'=>775486890+$i,
            ]);
        }
    }
}
