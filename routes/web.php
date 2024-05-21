<?php


use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\Classroom\Classroom;
use Livewire\Livewire;

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

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Route::get('/', function () {
            return view('layouts/sidebar');
        });


        include 'follow_up.php';
        include 'marks.php';
        include 'search.php';
        include 'resources.php';
        include 'restore.php';
        include 'force_delete.php';
        include 'display-items.php';


        Route::get('/classrooms/{educationalLevelId}', function ($educationalLevelId) {
            $classrooms = Classroom::where('edu_id', $educationalLevelId)->get()->toArray();
            return response()->json($classrooms);
        });

        // absence
        Route::get('school', function () {
            return view('teachers_affairs/follow_up_students/school-follow-up');
        });
        // absence
        Route::get('students_view', function () {
            return view('teachers_affairs/follow_up_students/index_school_follow_up');
        });

        // -----------------
        // teacher_classes
        Route::get('teacher_classes', function () {
            return view('academic_dep/relationships/class-teatcher');
        });

        // index_absence
        Route::get('index_absence', function () {
            return view('teachers_affairs/absence/index_absent_children');
        });


        // absence
        Route::get('add_marks', function () {
            return view('teachers_affairs/marks/add');
        });
        // absence
        Route::get('absence_class', function () {
            return view('teachers_affairs/absence/absent_student_class');
        });
        // -----------------------
        // absence
        Route::get('student_info', function () {
            return view('parents/student_info');
        });

        // absence
        Route::get('absence', function () {
            return view('students_affairs/absence/absent_students');
        });

        // ========================
        // control
        // marks of month
        Route::get('m_marks', function () {
            return view('control/monthly/marks_of_month');
        });
        // all m arks of month
        Route::get('all_m_marks', function () {
            return view('control/monthly/all_marks_of_month');
        });
        // first_term_income
        Route::get('first_term_income', function () {
            return view('control/first_term/first_term_income');
        });

        // all_marks_of_first_term
        Route::get('all_marks_of_first_term', function () {
            return view('control/first_term/all_marks_of_first_term');
        });

        // a route to show more info about a Student
        Route::get('students/more/{id}',
            [StudentController::class, 'more'])
            ->name('students.more');

    });


/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
