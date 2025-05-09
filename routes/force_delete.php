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


Route::get('educational-levels/forceDelete/{id}',
    [EducationalLevelController::class, 'forceDelete'])
    ->name('educational-levels.forceDelete');

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

Route::get('teachers/forceDelete/{id}',
    [TeacherController::class, 'forceDelete'])
    ->name('teachers.forceDelete');


Route::get('parents/forceDelete/{id}',
    [ParentsController::class, 'forceDelete'])
    ->name('parents.forceDelete');

Route::get('users/forceDelete/{id}',
    [UserController::class, 'forceDelete'])
    ->name('users.forceDelete');
