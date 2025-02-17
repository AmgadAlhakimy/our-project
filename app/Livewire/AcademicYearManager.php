<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AcademicYear;

class AcademicYearManager extends Component
{
    public $currentYear;
    public $newYear;

    public function mount()
    {
        $this->currentYear = AcademicYear::getCurrentYear()?->year;
    }

    // إنشاء سنة دراسية جديدة
    public function createNewYear()
    {
        if (!$this->newYear) {
            session()->flash('error', 'الرجاء إدخال السنة الدراسية الجديدة!');
            return;
        }

        // تعطيل السنة الحالية
        AcademicYear::where('is_current', true)->update(['is_current' => false]);

        // إضافة السنة الجديدة
        AcademicYear::create([
            'year' => $this->newYear,
            'is_current' => true,
        ]);

        $this->currentYear = $this->newYear;
        $this->newYear = '';

        session()->flash('success', 'تمت إضافة السنة الدراسية الجديدة بنجاح!');
    }

    public function render()
    {
        return view('livewire.academic-year-manager');
    }
}

