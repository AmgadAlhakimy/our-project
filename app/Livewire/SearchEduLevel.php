<?php

namespace App\Livewire;

use App\Models\EducationalLevel;
use Livewire\Component;
use Livewire\WithPagination;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SearchEduLevel extends Component
{
    use WithPagination;

    public $pagination = 5;

    public $search = '';
    public $orderBy = 'id';
    public $sortOrder = 'asc';
    public $arrow = false;
    public $showArrow = 'id';
    public bool $isPaginate;
    public $checkedLevels = [];
    public $selectAll = false;
    public $selectedRows = [];

    public function toggleSelectAll()
    {
        if (count($this->selectedRows) === count(array_filter($this->selectedRows))) {
            $this->selectedRows = [];
        } else {
            $this->selectedRows = array_keys($this->selectedRows);
        }
    }

    public function toggleRow($index)
    {
        if (($key = array_search($index, $this->selectedRows)) !== false) {
            unset($this->selectedRows[$key]);
        } else {
            $this->selectedRows[] = $index;
        }
    }

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
                $levels = EducationalLevel::where('name->en', 'like', "%$this->search%")
                    ->orwhere('name->ar', 'like', "%$this->search%")->get();
                return view('livewire.search-edu-level',
                    compact('levels'));
            } else {
                $this->isPaginate = true;
                $levels = EducationalLevel::orderBy(
                    ($this->orderBy) == 'name' ? 'name->' . $lang : $this->orderBy,
                    $this->sortOrder)->paginate($this->pagination);
                return view('livewire.search-edu-level',
                    compact('levels'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function deleteLevels()
    {
        dd($this->checkedLevels);
    }
//    public function toggleSelectAll()
//    {
////        $this->checkboxes = array_fill(0, count($this->checkboxes), $this->selectAll);
//    }
    public function updatedSelectAll($value)
    {
        if ($value) {

        } else {
            $this->checkedLevels = [];
        }
    }

    public function mount()
    {
        $this->fetchCheckboxes();
    }

    public function fetchCheckboxes()
    {
        $this->checkedLevels = EducationalLevel::pluck('id')->toArray();
    }

    public function checkAllCheckboxes()
    {
        if ($this->selectAll) {
            $this->checkedLevels = array_map(function () {
                return true;
            }, $this->checkedLevels);
        } else {
            $this->checkedLevels = array_map(function () {
                return false;
            }, $this->checkedLevels);
        }
    }

    public function updateCheckAll()
    {
        $this->checkedLevels = (count($this->checkedLevels) === count(array_filter($this->checkedLevels)));
    }
}
