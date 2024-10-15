<?php

namespace App\Livewire;


use App\Models\Classroom\Classroom;
use Livewire\Component;
use Livewire\WithPagination;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Classes extends Component
{
    use WithPagination;

    public $pagination = 5;

    public $search = '';
    public $orderBy = 'id';
    public $sortOrder = 'asc';
    public $arrow = false;
    public $showArrow = 'id';
    public bool $isPaginate;


    public function ordering($item)
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
                $classrooms = Classroom::where('name->en', 'like', "%$this->search%")
                    ->orwhere('name->ar', 'like', "%$this->search%")->get();
                return view('academic_dep.classrooms.display_classrooms',
                    [
                        'classrooms' => $classrooms,
                    ]);
            } else {
                $this->isPaginate = true;
                $classrooms = Classroom::orderBy(
                    ($this->orderBy) == 'name' ? 'name->' . $lang : $this->orderBy,
                    $this->sortOrder)->paginate($this->pagination);
                return view('academic_dep.classrooms.display_classrooms', [
                    'classrooms' => $classrooms,
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
