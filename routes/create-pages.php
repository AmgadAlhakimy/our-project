<?php

use App\Livewire\StudentsAffairs\Parents\CreateParents;
use App\Livewire\StudentsAffairs\Student\CreateStudent;
use Illuminate\Support\Facades\Route;


Route::get('/CreateStudent',CreateStudent::class)->name('create-student');
Route::get('/CreateParents',CreateParents::class)->name('create-parents');

