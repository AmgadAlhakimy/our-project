<?php

use App\Http\Controllers\activity\ActivityController;
use App\Http\Controllers\ActivityClassController;
use App\Http\Controllers\ClasssController;
use App\Http\Controllers\ClassSubjectController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// routes/web.php

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

//        Route::get('/', function () {
//            return view('layouts/sidebar');
//        });
        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('marks', function () {
            return view('marks/add');
        });

        Route::get('class-activities', function () {
            return view('academic_dep/relations/class-activities');
        });

//        Route::get('class-subjects', function () {
//            return view('academic_dep/relations/class-subjects');
//        });

        Route::get('class-teacher', function () {
            return view('academic_dep/relations/class-teacher');
        });

        Route::get('teacher-subjects', function () {
            return view('academic_dep/relations/teacher-subjects');
        });

        Route::get('relations-page', function () {
            return view('academic_dep/relations/relations-page');
        });

        Route::resource('subjects', SubjectController::class);
        Route::resource('classes', ClasssController::class);
        Route::resource('semesters', SemesterController::class);
        Route::resource('employees', EmployeeController::class);
        Route::resource('students', StudentController::class);
        Route::resource('activities', ActivityController::class);
        Route::resource('teachers', TeacherController::class);
        Route::resource('educational_levels', EducationalLevelController::class);
        Route::resource('class_subject', ClassSubjectController::class);
        Route::resource('class_activity', ActivityClassController::class);


        Route::get('classes/restore/{id}', [ClasssController::class, 'restore'])
            ->name('classes.restore');
        Route::get('classes/forceDelete/{id}', [ClasssController::class, 'forceDelete'])
            ->name('classes.forceDelete');
        Route::get('classes/cost', [ClasssController::class, 'cost'])
            ->name('classes.cost');


        Route::get('subjects/restore/{id}', [SubjectController::class, 'restore'])
            ->name('subjects.restore');
        Route::get('subjects/forceDelete/{id}', [SubjectController::class, 'forceDelete'])
            ->name('subjects.forceDelete');


        Route::get('semesters/restore/{id}',
            [SemesterController::class, 'restore'])
            ->name('semesters.restore');
        Route::get('semesters/forceDelete/{id}',
            [SemesterController::class, 'forceDelete'])
            ->name('semesters.forceDelete');

        Route::get('educational_levels/restore/{id}',
            [EducationalLevelController::class, 'restore'])
            ->name('educational_levels.restore');
        Route::get('educational_levels/forceDelete/{id}',
            [EducationalLevelController::class, 'forceDelete'])
            ->name('educational_levels.forceDelete');
    }
);

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts\sidebar');
    })->name('dashboard');
});
