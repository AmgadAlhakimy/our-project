<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('classes/restore/{id}',
    [ClassController::class, 'restore'])
    ->name('classes.restore');

Route::get('subjects/restore/{id}',
    [SubjectController::class, 'restore'])
    ->name('subjects.restore');

Route::get('activities/restore/{id}',
    [ActivityController::class, 'restore'])
    ->name('activities.restore');

Route::get('semesters/restore/{id}',
    [SemesterController::class, 'restore'])
    ->name('semesters.restore');

Route::get('educational_levels/restore/{id}',
    [EducationalLevelController::class, 'restore'])
    ->name('educational_levels.restore');
