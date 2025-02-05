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

            'ACADEMIC DEPARTMENT',
            'academic addition',
            'academic display',
            'academic trash',

            'create educational-level',
            'display educational-levels',
            'edit educational-level',
            'update educational-level',
            'delete educational-level',
            'display deleted educational-levels',
            'restore educational-level',
            'forceDelete educational-level',

            'create classroom',
            'display classrooms',
            'edit classroom',
            'update classroom',
            'delete classroom',
            'display deleted classrooms',
            'restore classroom',
            'forceDelete classroom',


            'create subject',
            'display subjects',
            'edit subject',
            'update subject',
            'delete subject',
            'display deleted subjects',
            'restore subject',
            'forceDelete subject',


            'create activity',
            'display activities',
            'edit activity',
            'update activity',
            'delete activity',
            'display deleted activities',
            'restore activity',
            'forceDelete activity',

            'teachers',
            'create teacher',
            'display teachers',
            'edit teacher',
            'update teacher',
            'delete teacher',
            'display deleted teachers',
            'restore teacher',
            'forceDelete teacher',

            'academic distribution management',
            'create subjects-classes',
            'create teachers-classes',
            'create teachers-subjects',
            'create classes-activities',

            'display academic distribution',
            'display subjects-classes',
            'display teachers-classes',
            'display teachers-subjects',
            'display classes-activities',

            'edit subjects-classes',
            'edit teachers-classes',
            'edit teachers-subjects',
            'edit classes-activities',

            'update subjects-classes',
            'update teachers-classes',
            'update teachers-subjects',
            'update classes-activities',

            'STUDENT AFFAIRS',
            'superiors',
            'create superior',
            'display superiors',
            'edit superior',
            'update superior',
            'delete superior',
            'display deleted superiors',
            'restore superior',
            'forceDelete superior',

            'create student',
            'display students',
            'edit student',
            'student more info',
            'update student',
            'delete student',
            'display deleted students',
            'restore student',
            'forceDelete student',

            'followup notebook',
            'create followup notebook',
            'display followup notebook',
            'edit followup notebook for all children',
            'update followup notebook for all children',
            'update followup notebook individually',
            'edit followup notebook individually',
            'whole notebook with all students in class',
            'whole notebook for specific student',


            'absent children',
            'presenting children',
            'display absent children',
            'display absent children of all time',
            'edit absent for all children',
            'edit absent individually',
            'update absent children',

            'leaving children',
            'check leaving children',
            'display left children',
            'edit leaving children',
            'update leaving children',

            'users',
            'create user',
            'display user',
            'edit user',
            'update user',
            'change users password',
            'display deleted users',
            'delete user',
            'restore user',
            'forceDelete user',

            'roles',
            'create role',
            'display roles',
            'edit role',
            'display roles permissions',
            'update role',
            'delete role',

            'PARENTS'


        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
