<?php

use App\Livewire\AcademicDep\DisplayClassrooms;
use App\Livewire\AcademicDep\DisplayEduLevel;
use App\Livewire\Counter;
use App\Livewire\DisplayStudents;
use App\Livewire\Student;
use Illuminate\Support\Facades\Route;


Route::get('/counter',Counter::class);
Route::get('/levels',DisplayEduLevel::class)->name('display-levels');
Route::get('/classrooms',DisplayClassrooms::class)->name('display-classrooms');
Route::get('/displayStudents',DisplayStudents::class)
->name('displayStudents');
Route::get('/student',Student::class)
    ->name('createStudent');
