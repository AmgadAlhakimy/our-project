<?php

use App\Http\Controllers\FollowUpChild\FollowUpChildController;
use App\Http\Controllers\Activity\ActivityClassroomController;
use App\Http\Controllers\Classroom\ClassroomSubjectController;
use App\Http\Controllers\Classroom\ClassroomTeacherController;
use App\Http\Controllers\Subject\SubjectTeacherController;
use App\Http\Controllers\Level\EducationalLevelController;
use App\Http\Controllers\Classroom\ClassroomController;
use App\Http\Controllers\Activity\ActivityController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\FollowUpStudentController;
use App\Http\Controllers\Subject\SubjectController;
use App\Http\Controllers\RelativeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;

Route::resource('activity_classroom', ActivityClassroomController::class);
Route::resource('educational-levels', EducationalLevelController::class);
Route::resource('classroom_teacher', ClassroomTeacherController::class);
Route::resource('classroom_subject', ClassroomSubjectController::class);
Route::resource('follow_up_students', FollowUpStudentController::class);
Route::resource('follow_up_children', FollowUpChildController::class);
Route::resource('subject_teacher', SubjectTeacherController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('activities', ActivityController::class);
Route::resource('relatives', RelativeController::class);
Route::resource('semesters', SemesterController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('marks', MarkController::class);
