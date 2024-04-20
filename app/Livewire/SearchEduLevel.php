<?php

namespace App\Livewire;

use App\Models\EducationalLevel;
use Livewire\Component;

class SearchEduLevel extends Component
{
    public $search = '';

    public function render()
    {
        $levels = [];
        if(strlen($this->search)>=1){
            $levels = EducationalLevel::where('name->en','like',"%$this->search%")
                    ->orwhere('name->ar','like',"%$this->search%")->get();
        }else{

            $levels = EducationalLevel::all();
        }
        return view('livewire.search-edu-level',
            compact('levels'));
    }
}
