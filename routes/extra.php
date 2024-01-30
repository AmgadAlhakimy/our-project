<?php



use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\FollowUpStudentController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;



Route::get('follow-up/createNote/{id}',
    [FollowUpStudentController::class, 'createNote'])
    ->name('follow_up_students.createNote');

Route::get('marks/insertMarks/{id}',
    [MarkController::class, 'insertMarks'])
    ->name('marks.insertMarks');

