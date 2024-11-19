<?php

namespace App\Livewire\AcademicDep;

use App\Models\Teacher\Teacher;
use Livewire\Component;
use Livewire\WithPagination;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class DisplayClassTeachers extends Component
{
    use WithPagination;

    public int $pagination = 5;

    public string $search = '';
    public string $orderBy = 'id';
    public string $sortOrder = 'asc';
    public bool $arrow = false;
    public string $showArrow = 'id';
    public bool $isPaginate;

    public function ordering($item): void
    {
        $this->showArrow = $item;
        if ($this->orderBy == $item) {
            $this->sortOrder = $this->sortOrder === 'asc' ? 'desc' : 'asc';
            $this->arrow = !$this->arrow;
        }
        $this->orderBy = $item;
    }

    public function render()
    {
        try {
            $lang = LaravelLocalization::setLocale();
            if (strlen($this->search) >= 1) {
                $this->isPaginate = false;
                $teachers = Teacher::where('name->en', 'like', "%$this->search%")
                    ->orwhere('name->ar', 'like', "%$this->search%")
                    ->orwhere('cost', 'like', "%$this->search%")->get();
            } else {
                $this->isPaginate = true;
                $teachers = Teacher::orderBy(
                    ($this->orderBy) == 'name' ? 'name->' . $lang : $this->orderBy,
                    $this->sortOrder)->paginate($this->pagination);
            }
            return view('academic-dep.relationships.class-teachers.display-class-teachers',
                [
                    'teachers' => $teachers,
                ])->title('Teachers-Classrooms');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
