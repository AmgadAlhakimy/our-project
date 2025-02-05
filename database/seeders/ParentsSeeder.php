<?php

namespace Database\Seeders;

use App\Models\Parents\Parents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ParentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fakerEn = Faker::create('en_US'); // English Faker
        $fakerAr = Faker::create('ar_SA'); // Arabic Faker


        $arabicJobs = [
            'طبيب', 'مهندس', 'مدرس', 'محاسب', 'محامي',
            'ممرض', 'صحفي', 'مبرمج', 'سائق', 'عامل'
        ];
        $arabicRelationships = [
              'أخ', 'أخت', 'جد', 'جدة', 'ابن',
            'ابنة', 'عم', 'عمة', 'خال', 'خالة'
        ];

        for ($i = 1; $i <= 10; $i++) {
            Parents::create([
                'father_name' => [
                    'en' => $fakerEn->name('male'),
                    'ar' => $fakerAr->name('male'),
                ],
                'father_work' => [
                    'en' => $fakerEn->word,
                    'ar' => $arabicJobs[array_rand($arabicJobs)],
                ],
                'father_contact1' => $fakerEn->numerify('77#######'),
                'father_contact2' => $fakerEn->numerify('77#######'),

                'mother_name' => [
                    'en' => $fakerEn->name('female'),
                    'ar' => $fakerAr->name('female'),
                ],
                'mother_work' => [
                    'en' => $fakerEn->word,
                    'ar' => $arabicJobs[array_rand($arabicJobs)],
                ],
                'mother_contact1' => $fakerEn->numerify('77#######'),
                'mother_contact2' => $fakerEn->numerify('77#######'),

                'kin_name' => [
                    'en' => $fakerEn->firstName,
                    'ar' => $fakerAr->firstName,
                ],
                'kin_relationship' => [
                    'en' => $fakerEn->word,
                    'ar' => $arabicRelationships[array_rand($arabicRelationships)],
                ],
                'kin_contact' => $fakerEn->numerify('77#######'),
            ]);
        }
    }
}
