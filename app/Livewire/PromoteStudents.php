<?php

namespace App\Livewire;

use App\Models\AcademicYear;
use App\Models\Classroom\Classroom;
use App\Models\Student\Student;
use Livewire\Component;

class PromoteStudents extends Component
{
    public $nextAcademicYear;

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('promote students')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }



        // تحديد السنة القادمة تلقائيًا بناءً على السنة الحالية
        $currentYear = AcademicYear::getCurrentYear();
        $this->nextAcademicYear = $currentYear ? ((int) explode('-', $currentYear->year)[1] + 1) . '-' . ((int) explode('-', $currentYear->year)[1] + 2) : null;
    }

    public function promote()
    {
        $currentYear = AcademicYear::getCurrentYear();

        if (!$currentYear) {
            session()->flash('error', 'لا توجد سنة دراسية حالية!');
            return;
        }

        // الحصول على جميع الطلاب الحاليين
        $students = Student::all();

        foreach ($students as $student) {
            // الحصول على الصف التالي للطالب
            $nextClass = Classroom::where('id', $student->classroom_id + 1)->first();

            if ($nextClass) {
                $student->update(['classroom_id' => $nextClass->id]);
            } else {
                // في حالة عدم وجود صف أعلى، الطالب تخرج (مثلاً)
                $student->update(['status' => 'graduated']);
            }
        }

        // تحديث السنة الدراسية
        AcademicYear::where('is_current', true)->update(['is_current' => false]);
        AcademicYear::create(['year' => $this->nextAcademicYear, 'is_current' => true]);

        session()->flash('success', 'message.students successfully migrated');
    }

    public function render()
    {
        return view('livewire.promote-students');
    }
}

