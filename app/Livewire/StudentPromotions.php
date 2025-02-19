<?php

namespace App\Livewire;

use App\Models\Classroom\Classroom;
use Illuminate\Support\Facades\DB;
use App\Models\Student\Student;
use Livewire\Component;
use Carbon\Carbon;

class StudentPromotions extends Component
{
    public function promoteStudents()
    {
        DB::transaction(function () {
            $currentYear = Carbon::now()->year; // الحصول على السنة الدراسية الحالية

            // الحصول على جميع الصفوف التي لديها صف تالي
            $classes = Classroom::whereNotNull('next_classroom_id')->get();

            foreach ($classes as $class) {
                // الحصول على جميع الطلاب في الصف الحالي
                $students = Student::where('classroom_id', $class->id)->get();

                foreach ($students as $student) {
                    // تخزين بيانات الترحيل قبل تحديث الصف
                    StudentPromotions::create([
                        'student_id'   => $student->id,
                        'from_classroom_id' => $class->id,
                        'to_classroom_id'   => $class->next_class_id,
                        'academic_year' => $currentYear,
                    ]);

                    // تحديث سجل الطالب وترحيله إلى الصف الجديد
                    $student->update(['classroom_id' => $class->next_class_id]);
                }
            }
        });

        session()->flash('message', 'تم ترحيل الطلاب بنجاح مع حفظ بياناتهم السابقة!');
    }

    public function render()
    {
        return view('livewire.student-promotion');
    }
}
