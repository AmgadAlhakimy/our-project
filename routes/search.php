<?php



use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;




Route::get('educational_levels/search',
    [EducationalLevelController::class, 'search'])
    ->name('educational_levels.search');

Route::get('classes/search',
    [ClassController::class, 'search'])
    ->name('classes.search');

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

