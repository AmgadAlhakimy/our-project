<?php

use App\Http\Controllers\Activity\ActivityController;
use App\Http\Controllers\Classroom\ClassroomController;
use App\Http\Controllers\Level\EducationalLevelController;
use App\Http\Controllers\Parents\ParentsController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Subject\SubjectController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\UserController;
//use Illuminate\Support\Facades\Route;


Route::get('educational-levels/restore/{id}',
    [EducationalLevelController::class, 'restore'])
    ->name('educational-levels.restore');

Route::get('classrooms/restore/{id}',
    [ClassroomController::class, 'restore'])
    ->name('classrooms.restore');

Route::get('subjects/restore/{id}',
    [SubjectController::class, 'restore'])
    ->name('subjects.restore');

Route::get('activities/restore/{id}',
    [ActivityController::class, 'restore'])
    ->name('activities.restore');

Route::get('students/restore/{id}',
    [StudentController::class, 'restore'])
    ->name('students.restore');

Route::get('teachers/restore/{id}',
    [TeacherController::class, 'restore'])
    ->name('teachers.restore');

Route::get('parents/restore/{id}',
    [ParentsController::class, 'restore'])
    ->name('parents.restore');

Route::get('users/restore/{id}',
    [UserController::class, 'restore'])
    ->name('users.restore');
