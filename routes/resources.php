<?php

use App\Http\Controllers\ActivityClassroomController;
use App\Http\Controllers\ClassroomSubjectController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\FollowUpStudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\RelativeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;

Route::resource('educational_levels', EducationalLevelController::class);
Route::resource('follow_up_students', FollowUpStudentController::class);
Route::resource('class_activity', ActivityClassroomController::class);
Route::resource('class_subject', ClassroomSubjectController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('activities', ActivityController::class);
Route::resource('students', StudentController::class);
Route::resource('relatives', RelativeController::class);
Route::resource('semesters', SemesterController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('marks', MarkController::class);
