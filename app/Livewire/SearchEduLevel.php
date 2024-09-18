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
    public $selectAll = false;

    public $selectedRows = [];

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
                        [
                            'levels' => $levels,
                            'selectAll' => $this->selectAll,
                        ]);
                } else {
                    $this->isPaginate = true;
                    $levels = EducationalLevel::orderBy(
                        ($this->orderBy) == 'name' ? 'name->' . $lang : $this->orderBy,
                        $this->sortOrder)->paginate($this->pagination);
                    return view('livewire.search-edu-level', [
                        'levels' => $levels,
                        'selectAll' => $this->selectAll,
                    ]);
                }
            } catch (\Exception $e) {
                return redirect()->back()->with(['error' => $e->getMessage()]);
            }
        }

//    public function toggleSelectAll()
//    {
//        $this->selectAll = !$this->selectAll;
//
//        $this->levels = collect($this->levels)->map(function ($level) {
//            $level['selected'] = $this->selectAll;
//            return $level;
//        });
//    }

    public function toggleSelectAll()
    {
        $this->selectAll = !$this->selectAll;
        $this->redirect('levelSelectionChanged');
    }
}
