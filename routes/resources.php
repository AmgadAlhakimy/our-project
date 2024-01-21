<?php

use App\Http\Controllers\RelativeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityClassController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ClassSubjectController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

Route::resource('educational_levels', EducationalLevelController::class);
Route::resource('classes', ClassController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('activities', ActivityController::class);
Route::resource('students', StudentController::class);
Route::resource('relatives', RelativeController::class);
Route::resource('semesters', SemesterController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('class_subject', ClassSubjectController::class);
Route::resource('class_activity', ActivityClassController::class);
