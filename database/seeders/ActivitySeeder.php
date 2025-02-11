<?php

namespace Database\Seeders;

use App\Models\Activity\Activity;
use App\Models\User;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users= User::all();
        $activities = [
            ['en' => 'Sports Day', 'ar' => 'يوم الرياضة'],
            ['en' => 'Science Fair', 'ar' => 'معرض العلوم'],
            ['en' => 'Art Exhibition', 'ar' => 'معرض الفنون'],
            ['en' => 'Music Concert', 'ar' => 'حفلة موسيقية'],
            ['en' => 'Field Trip', 'ar' => 'رحلة ميدانية'],
            ['en' => 'Reading Competition', 'ar' => 'مسابقة القراءة'],
            ['en' => 'Drama Club Performance', 'ar' => 'عرض نادي المسرح'],
            ['en' => 'Robotics Workshop', 'ar' => 'ورشة عمل الروبوتات'],
            ['en' => 'Environmental Awareness Day', 'ar' => 'يوم التوعية البيئية'],
            ['en' => 'Chess Tournament', 'ar' => 'بطولة الشطرنج'],
        ];

        foreach ($activities as $index => $activity) {
            Activity::create([
                'name' => $activity,
                'location' => [
                    'en' => "Location " . ($index + 1),
                    'ar' => "الموقع " . ($index + 1),
                ],
                'contact' => 772546950 + $index,
                'date' => "2024-02-" . str_pad($index + 1, 2, '0', STR_PAD_LEFT), // Ensure date format is correct
                'note' => 'No note',
                'user_id' => $users->random()->id,
            ]);
        }

    }
}
