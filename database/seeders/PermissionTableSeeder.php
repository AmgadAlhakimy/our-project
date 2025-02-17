<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permissions = [
            'educational-level' => [
                'en' => 'Educational Level',
                'ar' => 'المستوى التعليمي',
                'permissions' => [
                    ['create educational-level', 'إنشاء المستوى التعليمي'],
                    ['display educational-levels', 'عرض المستويات التعليمية'],
                    ['edit educational-level', 'تعديل المستوى التعليمي'],
                    ['delete educational-level', 'حذف المستوى التعليمي'],
                    ['display deleted educational-levels', 'عرض المستويات التعليمية المحذوفة'],
                    ['restore educational-level', 'استرجاع المستوى التعليمي'],
                    ['forceDelete educational-level', 'الحذف النهائي للمستوى التعليمي'],
                ],
            ],

            'classrooms' => [
                'en' => 'Classrooms',
                'ar' => 'الفصول الدراسية',
                'permissions' => [
                    ['create classroom', 'إنشاء فصل دراسي'],
                    ['display classrooms', 'عرض الفصول الدراسية'],
                    ['edit classroom', 'تعديل الفصل الدراسي'],
                    ['delete classroom', 'حذف الفصل الدراسي'],
                    ['display deleted classrooms', 'عرض الفصول الدراسية المحذوفة'],
                    ['restore classroom', 'استرجاع الفصل الدراسي'],
                    ['forceDelete classroom', 'الحذف النهائي للفصل الدراسي'],
                ],
            ],

            'subjects' => [
                'en' => 'Subjects',
                'ar' => 'المواد الدراسية',
                'permissions' => [
                    ['create subject', 'إنشاء مادة دراسية'],
                    ['display subjects', 'عرض المواد الدراسية'],
                    ['edit subject', 'تعديل المادة الدراسية'],
                    ['delete subject', 'حذف المادة الدراسية'],
                    ['display deleted subjects', 'عرض المواد الدراسية المحذوفة'],
                    ['restore subject', 'استرجاع المادة الدراسية'],
                    ['forceDelete subject', 'الحذف النهائي للمادة الدراسية'],
                ],
            ],

            'activities' => [
                'en' => 'Activities',
                'ar' => 'الأنشطة',
                'permissions' => [
                    ['create activity', 'إنشاء نشاط'],
                    ['display activities', 'عرض الأنشطة'],
                    ['edit activity', 'تعديل النشاط'],
                    ['delete activity', 'حذف النشاط'],
                    ['display deleted activities', 'عرض الأنشطة المحذوفة'],
                    ['restore activity', 'استرجاع النشاط'],
                    ['forceDelete activity', 'الحذف النهائي للنشاط'],
                ],
            ],

            'teachers' => [
                'en' => 'Teachers',
                'ar' => 'المعلمين',
                'permissions' => [
                    ['create teacher', 'إنشاء معلم'],
                    ['display teachers', 'عرض المعلمين'],
                    ['edit teacher', 'تعديل المعلم'],
                    ['delete teacher', 'حذف المعلم'],
                    ['display deleted teachers', 'عرض المعلمين المحذوفين'],
                    ['restore teacher', 'استرجاع المعلم'],
                    ['forceDelete teacher', 'الحذف النهائي للمعلم'],
                ],
            ],

            'academic-distribution' => [
                'en' => 'Academic Distribution',
                'ar' => 'التوزيع الأكاديمي',
                'permissions' => [
                    ['create subjects-classes', 'إنشاء توزيع المواد على الفصول'],
                    ['create teachers-classes', 'إنشاء توزيع المعلمين على الفصول'],
                    ['create teachers-subjects', 'إنشاء توزيع المعلمين على المواد'],
                    ['create classes-activities', 'إنشاء توزيع الفصول على الأنشطة'],
                    ['display academic distribution', 'عرض التوزيع الأكاديمي'],
                    ['display subjects-classes', 'عرض توزيع المواد على الفصول'],
                    ['display teachers-classes', 'عرض توزيع المعلمين على الفصول'],
                    ['display teachers-subjects', 'عرض توزيع المعلمين على المواد'],
                    ['display classes-activities', 'عرض توزيع الفصول على الأنشطة'],
                    ['edit subjects-classes', 'تعديل توزيع المواد على الفصول'],
                    ['edit teachers-classes', 'تعديل توزيع المعلمين على الفصول'],
                    ['edit teachers-subjects', 'تعديل توزيع المعلمين على المواد'],
                    ['edit classes-activities', 'تعديل توزيع الفصول على الأنشطة'],
                ],
            ],

            'student-affairs' => [
                'en' => 'Student Affairs',
                'ar' => 'شؤون الطلاب',
                'permissions' => [
                    ['create superior', 'إنشاء ولي أمر'],
                    ['display superiors', 'عرض أولياء الأمور'],
                    ['edit superior', 'تعديل ولي الأمر'],
                    ['delete superior', 'حذف ولي الأمر'],
                    ['display deleted superiors', 'عرض أولياء الأمور المحذوفين'],
                    ['restore superior', 'استرجاع ولي الأمر'],
                    ['forceDelete superior', 'الحذف النهائي لولي الأمر'],
                    ['create student', 'إنشاء طالب'],
                    ['display students', 'عرض الطلاب'],
                    ['edit student', 'تعديل الطالب'],
                    ['student more info', 'عرض معلومات إضافية عن الطالب'],
                    ['delete student', 'حذف الطالب'],
                    ['display deleted students', 'عرض الطلاب المحذوفين'],
                    ['restore student', 'استرجاع الطالب'],
                    ['forceDelete student', 'الحذف النهائي للطالب'],
                ],
            ],

            'users-roles' => [
                'en' => 'Users & Roles',
                'ar' => 'المستخدمون والأدوار',
                'permissions' => [
                    ['users', 'المستخدمون'],
                    ['create user', 'إنشاء مستخدم'],
                    ['display users', 'عرض المستخدمين'],
                    ['edit user', 'تعديل المستخدم'],
                    ['change users password', 'تغيير كلمة مرور المستخدم'],
                    ['display deleted users', 'عرض المستخدمين المحذوفين'],
                    ['delete user', 'حذف المستخدم'],
                    ['restore user', 'استرجاع المستخدم'],
                    ['forceDelete user', 'الحذف النهائي للمستخدم'],
                    ['roles', 'الأدوار'],
                    ['create role', 'إنشاء دور'],
                    ['display roles', 'عرض الأدوار'],
                    ['edit role', 'تعديل الدور'],
                    ['display role permissions', 'عرض صلاحيات الدور'],
                    ['delete role', 'حذف الدور'],
                    ['who did this', 'من قام بهذا؟'],
                ],
            ],

            'followup-notebook' => [
                'en' => 'Follow-up Notebook',
                'ar' => 'دفتر المتابعة',
                'permissions' => [
                    ['followup notebook', 'دفتر المتابعة'],
                    ['create followup notebook', 'إنشاء دفتر المتابعة'],
                    ['display followup notebook', 'عرض دفتر المتابعة'],
                    ['edit followup notebook for all children', 'تعديل دفتر المتابعة لجميع الأطفال'],
                    ['edit followup notebook individually', 'تعديل دفتر المتابعة لكل طفل على حدة'],
                    ['update followup notebook for all children', 'تحديث دفتر المتابعة لجميع الأطفال'],
                    ['update followup notebook individually', 'تحديث دفتر المتابعة لكل طفل على حدة'],
                    ['whole notebook with all students in class', 'الدفتر بالكامل لجميع الطلاب في الفصل'],
                    ['whole notebook for specific student', 'الدفتر بالكامل لطالب معين'],
                ],
            ],

            'attendance' => [
                'en' => 'Attendance',
                'ar' => 'الحضور',
                'permissions' => [
                    ['absent children', 'الأطفال الغائبون'],
                    ['presenting children', 'الأطفال الحاضرون'],
                    ['display absent children', 'عرض الأطفال الغائبين'],
                    ['display absent children of all time', 'عرض جميع الأطفال الغائبين على مدار الوقت'],
                    ['edit absent for all children', 'تعديل الغياب لجميع الأطفال'],
                    ['edit absent individually', 'تعديل الغياب لكل طفل على حدة'],
                    ['update absent children', 'تحديث بيانات الغياب'],
                ],
            ],

            'leaving' => [
                'en' => 'Leaving',
                'ar' => 'المغادرة',
                'permissions' => [
                    ['leaving children', 'الأطفال المغادرون'],
                    ['check leaving children', 'التحقق من الأطفال المغادرين'],
                    ['display left children', 'عرض الأطفال الذين غادروا'],
                    ['edit leaving children', 'تعديل المغادرة للأطفال'],
                    ['update leaving children', 'تحديث المغادرة للأطفال'],
                ],
            ],

            'parents' => [
                'en' => 'Parents',
                'ar' => 'الأباء',
                'permissions' => [
                    ['about children', 'معلومات الطالب بالكامل'],
                    ['child followup notebook', 'دفتر متابعة الطالب'],
                    ['absent info', 'عرض الغياب'],
                    ['leaving info', 'عرض الإنصراف'],
                ],
            ],

            'promote students' => [
                'en' => 'promote students',
                'ar' => 'ترحيل الطلاب',
                'permissions' => [
                    ['promote students', 'ترحيل الطلاب'],
                ],
            ],

        ];

        foreach ($permissions as $category => $data) {
            foreach ($data['permissions'] as $permission) {
                Permission::create([
                    'name' => $permission[0], // English name
                    'name_ar' => $permission[1], // Arabic name
                    'department' => $data['en'], // Department name in English
                    'department_ar' => $data['ar'], // Department name in Arabic
                ]);
            }
        }
    }
}
