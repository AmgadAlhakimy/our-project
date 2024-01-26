<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;


Route::get('educational_levels/restore/{id}',
    [EducationalLevelController::class, 'restore'])
    ->name('educational_levels.restore');

Route::get('classes/restore/{id}',
    [ClassController::class, 'restore'])
    ->name('classes.restore');

Route::get('subjects/restore/{id}',
    [SubjectController::class, 'restore'])
    ->name('subjects.restore');

Route::get('activities/restore/{id}',
    [ActivityController::class, 'restore'])
    ->name('activities.restore');

Route::get('students/restore/{id}',
    [StudentController::class, 'restore'])
    ->name('students.restore');

Route::get('semesters/restore/{id}',
    [SemesterController::class, 'restore'])
    ->name('semesters.restore');
