<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;


Route::get('educational_levels/forceDelete/{id}',
    [EducationalLevelController::class, 'forceDelete'])
    ->name('educational_levels.forceDelete');

Route::get('classes/forceDelete/{id}',
    [ClassController::class, 'forceDelete'])
    ->name('classes.forceDelete');

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
