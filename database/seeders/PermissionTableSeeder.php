<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permissions = [
            'educational-level-create',
            'educational-level-display',
            'educational-level-edit',
            'educational-level-delete',
            'educational-level-restore',
            'educational-level-forceDelete',

            'classroom-create',
            'classroom-display',
            'classroom-edit',
            'classroom-delete',
            'classroom-restore',
            'classroom-forceDelete',

            'subject-create',
            'subject-display',
            'subject-edit',
            'subject-delete',
            'subject-restore',
            'subject-forceDelete',

            'activity-create',
            'activity-display',
            'activity-edit',
            'activity-delete',
            'activity-restore',
            'activity-forceDelete',

        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
