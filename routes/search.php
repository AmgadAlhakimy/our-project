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




Route::get('educational_levels/search',
    [EducationalLevelController::class, 'search'])
    ->name('educational_levels.search');

Route::get('classrooms/search',
    [ClassroomController::class, 'search'])
    ->name('classrooms.search');

Route::get('subjects/search',
    [SubjectController::class, 'search'])
    ->name('subjects.search');

Route::get('activities/search',
    [ActivityController::class, 'search'])
    ->name('activities.search');

Route::get('students/search',
    [StudentController::class, 'search'])
    ->name('students.search');

Route::get('teachers/search',
    [TeacherController::class, 'search'])
    ->name('teachers.search');

Route::get('marks/search',
    [MarkController::class, 'search'])
    ->name('marks.search');

Route::get('follow-up/createNote/{id}',
    [FollowUpStudentController::class, 'createNote'])
    ->name('follow_up_students.createNote');





Route::get('/classrooms/getClassrooms/{id}',
    [StudentController::class, 'getClassrooms'])
    ->name('classrooms.getClassrooms');
