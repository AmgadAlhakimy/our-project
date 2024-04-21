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

    public function ordering($item)
    {
        if ($this->orderBy == $item) {
            $this->sortOrder = $this->sortOrder === 'asc' ? 'desc' : 'asc';
        }
        $this->orderBy = $item;
    }

    public function render()
    {
        try {

        $lang = LaravelLocalization::setLocale();

        if (strlen($this->search) >= 1) {
            $levels = EducationalLevel::where('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar', 'like', "%$this->search%")->get();
        } else {

            $levels = EducationalLevel::orderBy(
                ($this->orderBy) == 'name' ? 'name->' . $lang : $this->orderBy,
                $this->sortOrder)->paginate($this->pagination);
        }

        return view('livewire.search-edu-level',
            compact('levels'));
        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
