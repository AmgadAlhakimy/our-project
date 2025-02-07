<?php

use App\Http\Controllers\Activity\ActivityClassroomController;
use App\Http\Controllers\Activity\ActivityController;
use App\Http\Controllers\Classroom\ClassroomController;
use App\Http\Controllers\Classroom\ClassroomSubjectController;
use App\Http\Controllers\Classroom\ClassroomTeacherController;
use App\Http\Controllers\FollowUpChild\FollowUpChildController;
use App\Http\Controllers\Level\EducationalLevelController;
use App\Http\Controllers\Parents\ParentsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Subject\SubjectController;
use App\Http\Controllers\Subject\SubjectTeacherController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\AbsentController;
use App\Http\Controllers\UserController;
//use Illuminate\Support\Facades\Route;

Route::resource('activity-classrooms', ActivityClassroomController::class);
Route::resource('educational-levels', EducationalLevelController::class);
Route::resource('follow_up_children', FollowUpChildController::class);
Route::resource('class-teachers', ClassroomTeacherController::class);
Route::resource('class-subjects', ClassroomSubjectController::class);
Route::resource('subject-teachers', SubjectTeacherController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('activities', ActivityController::class);
Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('parents', ParentsController::class);
Route::resource('absent', AbsentController::class);
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
