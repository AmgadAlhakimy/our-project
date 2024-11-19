<?php

use App\Livewire\AcademicDep\DisplaySubjectTeachers;
use App\Livewire\AcademicDep\DisplayActivityClasses;
use App\Livewire\AcademicDep\DisplayClassSubjects;
use App\Livewire\AcademicDep\DisplayClassTeachers;
use App\Livewire\AcademicDep\DisplayActivities;
use App\Livewire\AcademicDep\DisplayClassrooms;
use App\Livewire\AcademicDep\DisplayEduLevel;
use App\Livewire\AcademicDep\DisplaySubjects;
use Illuminate\Support\Facades\Route;
use App\Livewire\DisplayStudents;
use App\Livewire\Student;

Route::get('/subject-teachers',DisplaySubjectTeachers::class)->name('display-subject-teachers');
Route::get('/activity-classes',DisplayActivityClasses::class)->name('display-activity-classes');
Route::get('/class-subjects',DisplayClassSubjects::class)->name('display-class-subjects');
Route::get('/class-teachers',DisplayClassTeachers::class)->name('display-class-teachers');
Route::get('/classrooms',DisplayClassrooms::class)->name('display-classrooms');
Route::get('/activities',DisplayActivities::class)->name('display-activities');
Route::get('/subjects',DisplaySubjects::class)->name('display-subjects');
Route::get('/levels',DisplayEduLevel::class)->name('display-levels');

Route::get('/displayStudents',DisplayStudents::class)
->name('displayStudents');
Route::get('/student',Student::class)
    ->name('createStudent');
