<?php

use App\Livewire\StudentsAffairs\CreateStudent;
use Illuminate\Support\Facades\Route;


Route::get('/CreateStudent',CreateStudent::class)->name('create-student');
