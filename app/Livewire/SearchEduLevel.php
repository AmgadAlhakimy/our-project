<?php

namespace App\Livewire;

use App\Models\EducationalLevel;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SearchEduLevel extends Component
{
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
        $levels = [];
        $lang = LaravelLocalization::setLocale();

        if (strlen($this->search) >= 1) {
            $levels = EducationalLevel::where('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar', 'like', "%$this->search%")->get();
        } else {

            $levels = EducationalLevel::orderBy(
                ($this->orderBy) == 'name' ? 'name->' . $lang : $this->orderBy,
                $this->sortOrder)->get();
        }
        return view('livewire.search-edu-level',
            compact('levels'));
    }
}
