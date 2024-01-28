<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('educational_levels/forceDelete/{id}',
    [EducationalLevelController::class, 'forceDelete'])
    ->name('educational_levels.forceDelete');

Route::get('classrooms/forceDelete/{id}',
    [ClassroomController::class, 'forceDelete'])
    ->name('classrooms.forceDelete');

Route::get('subjects/forceDelete/{id}',
    [SubjectController::class, 'forceDelete'])
    ->name('subjects.forceDelete');

Route::get('activities/forceDelete/{id}',
    [ActivityController::class, 'forceDelete'])
    ->name('activities.forceDelete');

Route::get('students/forceDelete/{id}',
    [StudentController::class, 'forceDelete'])
    ->name('students.forceDelete');

Route::get('semesters/forceDelete/{id}',
    [SemesterController::class, 'forceDelete'])
    ->name('semesters.forceDelete');

Route::get('teachers/forceDelete/{id}',
    [TeacherController::class, 'forceDelete'])
    ->name('teachers.forceDelete');
