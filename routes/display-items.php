<?php

use App\Livewire\DisplayStudents;
use App\Livewire\SearchEduLevel;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Student;



Route::get('/counter',Counter::class);
Route::get('/level',SearchEduLevel::class)->name('show-levels');
Route::get('/displayStudents',DisplayStudents::class);
Route::get('/student',Student::class)
    ->name('createStudent');
